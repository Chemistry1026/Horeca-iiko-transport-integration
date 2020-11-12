<?php


namespace IikoTransport\dto\Delivery;


use IikoTransport\dto\Cancel\CancelInfoCauseDto;
use IikoTransport\dto\Cancel\CancelInfoDto;
use IikoTransport\dto\Delivery\Order\DeliveryRetrieveOrdersByIDsOrder;
use IikoTransport\dto\Delivery\Order\DeliveryRetrieveOrdersByIDsOrderInfo;
use IikoTransport\dto\Order\CourierInfo\CourierInfoDto;
use IikoTransport\dto\Order\CourierInfo\CourierInfoSingleDto;
use IikoTransport\dto\Order\DeliveryPoint\Address\OrderDeliveryPointAddressStreetCityDto;
use IikoTransport\dto\Order\DeliveryPoint\Address\OrderDeliveryPointAddressStreetDto;
use IikoTransport\dto\Order\DeliveryPoint\OrderDeliveryPointAddressDto;
use IikoTransport\dto\Order\DeliveryPoint\OrderDeliveryPointCoordinateDto;
use IikoTransport\dto\Order\DeliveryPoint\OrderDeliveryPointDto;
use IikoTransport\dto\Order\Item\OrderItemCompoundDto;
use IikoTransport\dto\Order\Item\OrderItemProductDto;
use IikoTransport\dto\Order\OrderComboDto;
use IikoTransport\dto\Order\OrderConceptionDto;
use IikoTransport\dto\Order\OrderCustomerDto;
use IikoTransport\dto\Order\OrderDiscountDto;
use IikoTransport\dto\Order\OrderGuestInfoDto;
use IikoTransport\dto\Order\OrderMarketingSourceDto;
use IikoTransport\dto\Order\OrderOperatorDto;
use IikoTransport\dto\Order\OrderPaymentDto;
use IikoTransport\dto\Order\OrderProblemFlagDto;
use IikoTransport\dto\Order\OrderTypeDto;
use IikoTransport\RestDto;

class DeliveryRetrieveOrdersByIDsResponseData extends RestDto
{
    /**
     * Operation ID
     * @var string
     */
    public $correlationId;

    /**
     * Orders
     * @var DeliveryRetrieveOrdersByIDsOrderInfo[]
     */
    public $orders;

    public function __construct($data)
    {
        $this->insertDataToClass($data);

        $this->setArrayToPropertyFromJson('orders', new DeliveryRetrieveOrdersByIDsOrderInfo(), function (DeliveryRetrieveOrdersByIDsOrderInfo $dto) {
            $dto->setPropertyToClassPropertyFromJson('order', new DeliveryRetrieveOrdersByIDsOrder());

            if ($orderDto = $dto->order) {
                $orderDto->setPropertyToClassPropertyFromJson('customer', new OrderCustomerDto());

                $orderDto->setPropertyToClassPropertyFromJson('deliveryPoint', new OrderDeliveryPointDto());
                if ($deliveryPointDto = $orderDto->deliveryPoint) {
                    $deliveryPointDto->setPropertyToClassPropertyFromJson('coordinates', new OrderDeliveryPointCoordinateDto());

                    $deliveryPointDto->setPropertyToClassPropertyFromJson('address', new OrderDeliveryPointAddressDto());
                    if ($addressDto = $deliveryPointDto->address) {
                        $addressDto->setPropertyToClassPropertyFromJson('street', new OrderDeliveryPointAddressStreetDto());
                        if ($streetDto = $addressDto->street) {
                            $streetDto->setPropertyToClassPropertyFromJson('city', new OrderDeliveryPointAddressStreetCityDto());
                        }

                        $addressDto->setPropertyToClassPropertyFromJson('region', new OrderDeliveryPointAddressStreetCityDto());
                    }
                }

                $orderDto->setPropertyToClassPropertyFromJson('cancelInfo', new CancelInfoDto());
                if ($cancelInfoDto = $orderDto->cancelInfo) {
                    $cancelInfoDto->setPropertyToClassPropertyFromJson('cause', new CancelInfoCauseDto());
                }

                $orderDto->setPropertyToClassPropertyFromJson('courierInfo', new CourierInfoDto());
                if ($courierInfoDto = $orderDto->courierInfo) {
                    $courierInfoDto->setPropertyToClassPropertyFromJson('courier', new CourierInfoSingleDto());
                }

                $orderDto->setPropertyToClassPropertyFromJson('problem', new OrderProblemFlagDto());
                $orderDto->setPropertyToClassPropertyFromJson('operator', new OrderOperatorDto());
                $orderDto->setPropertyToClassPropertyFromJson('Conception', new OrderConceptionDto());
                $orderDto->setPropertyToClassPropertyFromJson('marketingSource', new OrderMarketingSourceDto());
                $orderDto->setPropertyToClassPropertyFromJson('guestsInfo', new OrderGuestInfoDto());

                foreach ($orderDto->items as &$item) {
                    switch ($item['type']) {
                        case "Product":
                            $item = $orderDto->setPropertyToClassPropertyFromJson($item, new OrderItemProductDto());
                            break;

                        case "Compound":
                            $item = $orderDto->setPropertyToClassPropertyFromJson($item, new OrderItemCompoundDto());
                            break;
                    }
                }

                $orderDto->setArrayToPropertyFromJson('combos', new OrderComboDto());

                $orderDto->setArrayToPropertyFromJson('payments', new OrderPaymentDto());

                $orderDto->setArrayToPropertyFromJson('discounts', new OrderDiscountDto());

                $orderDto->setPropertyToClassPropertyFromJson('orderType', new OrderTypeDto());
            }
        });
    }
}