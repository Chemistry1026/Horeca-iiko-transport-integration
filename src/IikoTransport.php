<?php


namespace IikoTransport;


use IikoTransport\dto\Nomenclature\NomenclatureResponseDto;
use IikoTransport\dto\Order\CloseOrder\CloseOrderInputDataDto;
use IikoTransport\dto\Order\CloseOrder\CloseOrderResponseDto;
use dto\Order\CreateDelivery\CreateOrderInputDataDto;
use dto\Order\CreateDelivery\CreateOrderResponseDto;
use IikoTransport\dto\Order\Data\AddOrderItems\AddOrderItemsInputDataDto;
use IikoTransport\dto\Order\Data\GetOrdersByIds\GetOrdersByIdsInputDataDto;
use IikoTransport\dto\Order\Data\GetOrdersByIds\GetOrdersByIdsResponseDto;
use IikoTransport\dto\Order\Data\UpdateOrderPayment\UpdateOrderPaymentInputDataDto;
use IikoTransport\dto\Order\Data\UpdateOrderPayment\UpdateOrderPaymentResponseDto;
use IikoTransport\dto\Organizations\OrganizationsListResponseDto;
use IikoTransport\dto\PaymentType\PaymentTypeInputDataDto;
use IikoTransport\dto\PaymentType\PaymentTypeResponseDto;
use IikoTransport\dto\TerminalGroups\TerminalGroupsResponseDto;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\GuzzleException;

class IikoTransport
{
    /**
     * @var RestMethods
     */
    public $restMethods;

    public function __construct(string $login)
    {
        $restMethods = new RestMethods($login);
        $this->restMethods = $restMethods;
    }

    /**
     * @return OrganizationsListResponseDto|ResponseInterface|string
     * @throws GuzzleException
     */
    public function getOrganizations()
    {
        $response = $this->restMethods->getOrganizations();
        if ($response->getStatusCode() == 200) {
            return new OrganizationsListResponseDto(json_decode($response->getBody(), true));
        }
        return $response;
    }

    /**
     * @param string[] $organizationIds
     * @return TerminalGroupsResponseDto|ResponseInterface|string
     * @throws GuzzleException
     */
    public function getTerminalGroups(array $organizationIds)
    {
        $response = $this->restMethods->getTerminalGroups($organizationIds);
        if ($response->getStatusCode() == 200) {
            return new TerminalGroupsResponseDto(json_decode($response->getBody(), true));
        }
        return $response;
    }

    /**
     * @param string $organizationId
     * @return NomenclatureResponseDto|ResponseInterface|string
     * @throws GuzzleException
     */
    public function getNomenclature(string $organizationId)
    {
        $response = $this->restMethods->getNomenclature($organizationId);
        if ($response->getStatusCode() == 200) {
            return new NomenclatureResponseDto(json_decode($response->getBody(), true));
        }
        return $response;
    }

    /**
     * @param CreateOrderInputDataDto $dto
     * @return CreateOrderResponseDto|ResponseInterface|string
     * @throws GuzzleException
     */
    public function createOrder(CreateOrderInputDataDto $dto)
    {
        $response = $this->restMethods->createOrder($dto);
        if ($response->getStatusCode() == 200) {
            return new CreateOrderResponseDto(json_decode($response->getBody(), true));
        }
        return $response;
    }

    /**
     * @param GetOrdersByIdsInputDataDto $dto
     * @return GetOrdersByIdsResponseDto|ResponseInterface|string
     * @throws GuzzleException
     */
    public function getOrdersByIds(GetOrdersByIdsInputDataDto $dto)
    {
        $response = $this->restMethods->getOrdersByIds($dto);
        if ($response->getStatusCode() == 200) {
            return new GetOrdersByIdsResponseDto(json_decode($response->getBody(), true));
        }
        return $response;
    }

    /**
     * @param UpdateOrderPaymentInputDataDto $dto
     * @return UpdateOrderPaymentResponseDto|ResponseInterface|string
     * @throws GuzzleException
     */
    public function updateOrderPayment(UpdateOrderPaymentInputDataDto $dto)
    {
        $response = $this->restMethods->updateOrderPayment($dto);
        if ($response->getStatusCode() == 200) {
            return new UpdateOrderPaymentResponseDto(json_decode($response->getBody(), true));
        }
        return $response;
    }

    /**
     * @param AddOrderItemsInputDataDto $dto
     * @return UpdateOrderPaymentResponseDto|ResponseInterface|string
     * @throws GuzzleException
     */
    public function addOrderItems(AddOrderItemsInputDataDto $dto)
    {
        $response = $this->restMethods->addOrderItems($dto);
        if ($response->getStatusCode() == 200) {
            return new UpdateOrderPaymentResponseDto(json_decode($response->getBody(), true));
        }
        return $response;
    }

    /**
     * @param CloseOrderInputDataDto $dto
     * @return CloseOrderResponseDto|ResponseInterface|string
     * @throws GuzzleException
     */
    public function closeOrder(CloseOrderInputDataDto $dto)
    {
        $response = $this->restMethods->closeOrder($dto);
        if ($response->getStatusCode() == 200) {
            return new CloseOrderResponseDto(json_decode($response->getBody(), true));
        }
        return $response;
    }

    /**
     * @param PaymentTypeInputDataDto $dto
     * @return PaymentTypeResponseDto|ResponseInterface
     * @throws GuzzleException
     */
    public function getPaymentTypes(PaymentTypeInputDataDto $dto)
    {
        $response = $this->restMethods->getPaymentTypes($dto);
        if ($response->getStatusCode() == 200) {
            return new PaymentTypeResponseDto(json_decode($response->getBody(), true));
        }
        return $response;
    }
}