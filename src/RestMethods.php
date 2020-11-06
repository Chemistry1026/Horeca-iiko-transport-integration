<?php


namespace IikoTransport;


use GuzzleHttp\Exception\GuzzleException;
use IikoTransport\dto\Authorization\AuthorizationDto;
use IikoTransport\dto\Authorization\AuthorizationResponseDto;
use IikoTransport\dto\Nomenclature\GetNomenclatureDto;
use IikoTransport\dto\Order\CloseOrder\CloseOrderInputDataDto;
use IikoTransport\dto\Order\Create\CreateOrderInputDataDto;
use IikoTransport\dto\Order\Data\AddOrderItems\AddOrderItemsInputDataDto;
use IikoTransport\dto\Order\Data\GetOrdersByIds\GetOrdersByIdsInputDataDto;
use IikoTransport\dto\Order\Data\UpdateOrderPayment\UpdateOrderPaymentInputDataDto;
use IikoTransport\dto\Organizations\GetOrganizationsDto;
use IikoTransport\dto\PaymentType\PaymentTypeInputDataDto;
use IikoTransport\dto\TerminalGroups\GetTerminalGroupsDto;
use Psr\Http\Message\ResponseInterface;

class RestMethods extends Rest
{
    /**
     * API login
     * @var string
     */
    private $login;

    /**
     * Authentication token
     * @var string
     */
    private $token = '';

    const AUTH_ROUTE = 'access_token';
    const ORGANIZATIONS_ROUTE = 'organizations';
    const TERMINAL_GROUP_ROUTE = 'terminal_groups';
    const NOMENCLATURE_ROUTE = 'nomenclature';
    const ORDER_CREATE_ROUTE = 'order/create';
    const ORDERS_BY_SPECIFIC_IDS_ROUTE = 'order/by_id';
    const UPDATE_ORDER_PAYMENTS_ROUTE = 'order/update_payments';
    const ADD_ORDER_ITEMS_ROUTE = 'order/add_items';
    const CLOSE_ORDER_ROUTE = 'order/close';
    const PAYMENT_TYPES_ROUTE = 'payment_types';

    /**
     * RestMethods constructor.
     * @param string $login
     */
    public function __construct(string $login)
    {
        $this->login = $login;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token)
    {
        $this->token = "Bearer {$token}";
    }

    /**
     * @return string[]
     */
    public function headersWithAuth()
    {
        return ['Authorization' => $this->token];
    }

    /**
     * @param $data
     * @return array
     */
    public function jsonData($data)
    {
        return [
            'json' => $data,
            'headers' => $this->headersWithAuth()
        ];
    }

    /**
     * Retrieve session key for API user
     * @return string|ResponseInterface
     * @throws GuzzleException
     */
    public function auth()
    {
        $dto = new AuthorizationDto($this->login);

        $response = $this->makeRequest($dto->toArray(), $this->apiRoute(self::AUTH_ROUTE), 'POST', true);

        $authDto = new AuthorizationResponseDto(json_decode($response->getBody(), true));
        $this->setToken($authDto->token);

        return $response;
    }

    /**
     * Returns organizations available to api-login user
     * @return string|ResponseInterface
     * @throws GuzzleException
     */
    public function getOrganizations()
    {
        if (!$this->token) {
            $this->auth();
        }

        $dto = new GetOrganizationsDto();
        return $this->makeRawRequest($this->jsonData($dto->toArray()), $this->apiRoute(self::ORGANIZATIONS_ROUTE), 'POST');
    }

    /**
     * Method that returns information on groups of delivery terminals
     * @param string[] $organizationIds
     * @return string|ResponseInterface
     * @throws GuzzleException
     */
    public function getTerminalGroups(array $organizationIds)
    {
        if (!$this->token) {
            $this->auth();
        }

        $dto = new GetTerminalGroupsDto($organizationIds);
        return $this->makeRawRequest($this->jsonData($dto->toArray()), $this->apiRoute(self::TERMINAL_GROUP_ROUTE), 'POST');
    }

    /**
     * Method that returns organization stock list
     * @param string $organizationId
     * @return ResponseInterface|string
     * @throws GuzzleException
     */
    public function getNomenclature(string $organizationId)
    {
        if (!$this->token) {
            $this->auth();
        }

        $dto = new GetNomenclatureDto($organizationId);
        return $this->makeRawRequest($this->jsonData($dto->toArray()), $this->apiRoute(self::NOMENCLATURE_ROUTE), 'POST');
    }

    /**
     * Create order (in restaurant)
     * @param CreateOrderInputDataDto $dto
     * @return ResponseInterface|string
     * @throws GuzzleException
     */
    public function createOrder(CreateOrderInputDataDto $dto)
    {
        if (!$this->token) {
            $this->auth();
        }

        return $this->makeRawRequest($this->jsonData($dto->toArray()), $this->apiRoute(self::ORDER_CREATE_ROUTE), 'POST');
    }

    /**
     * Retrieve orders by IDs
     * @param GetOrdersByIdsInputDataDto $dto
     * @return ResponseInterface|string
     * @throws GuzzleException
     */
    public function getOrdersByIds(GetOrdersByIdsInputDataDto $dto)
    {
        if (!$this->token) {
            $this->auth();
        }

        return $this->makeRawRequest($this->jsonData($dto->toArray()), $this->apiRoute(self::ORDERS_BY_SPECIFIC_IDS_ROUTE), 'POST');
    }

    /**
     * Update order payment details
     * @param UpdateOrderPaymentInputDataDto $dto
     * @return ResponseInterface|string
     * @throws GuzzleException
     */
    public function updateOrderPayment(UpdateOrderPaymentInputDataDto $dto)
    {
        if (!$this->token) {
            $this->auth();
        }

        return $this->makeRawRequest($this->jsonData($dto->toArray()), $this->apiRoute(self::UPDATE_ORDER_PAYMENTS_ROUTE), 'POST');
    }

    /**
     * Add order items
     * @param AddOrderItemsInputDataDto $dto
     * @return ResponseInterface|string
     * @throws GuzzleException
     */
    public function addOrderItems(AddOrderItemsInputDataDto $dto)
    {
        if (!$this->token) {
            $this->auth();
        }

        return $this->makeRawRequest($this->jsonData($dto->toArray()), $this->apiRoute(self::ADD_ORDER_ITEMS_ROUTE), 'POST');
    }

    /**
     * Close order
     * @param CloseOrderInputDataDto $dto
     * @return ResponseInterface|string
     * @throws GuzzleException
     */
    public function closeOrder(CloseOrderInputDataDto $dto)
    {
        if (!$this->token) {
            $this->auth();
        }

        return $this->makeRawRequest($this->jsonData($dto->toArray()), $this->apiRoute(self::CLOSE_ORDER_ROUTE), 'POST');
    }

    /**
     * Returns payment types details
     * @param PaymentTypeInputDataDto $dto
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function getPaymentTypes(PaymentTypeInputDataDto $dto)
    {
        if (!$this->token) {
            $this->auth();
        }

        return $this->makeRawRequest($this->jsonData($dto->toArray()), $this->apiRoute(self::PAYMENT_TYPES_ROUTE), 'POST');
    }
}