<?php


namespace IikoTransport\dto\Order;


use IikoTransport\RestDto;

class OrderErrorDto extends RestDto
{
    /**
     *  Enum: "Common" "IllegalDeliveryStatus" "CustomerNameNotSpecified" "ProductNotFound" "MarketingSourceNotFound" "PaymentTypeNotFound" "ProductSizeNotFound" "ProductGroupNotFound" "OrderNotFound" "ConceptionNotFound" "OrderDuplicateId" "CantFindTerminalById" "TerminalUnregisteredOrDeleted" "InvalidPhone" "ModifierDuplicated" "ProductCanBuyFromCashdesk" "DeliveryOpinionMarkInvalid" "WrongDeliveryStatusForOpinion" "OpinionCommentTooLong" "SurveyItemNotFound" "PaymentTypeCanNotBeUsedAsExternal" "AddressNotFound" "HomeNotFound" "IikonetPaymentAdditionalDataCanNotBeParsed" "IikonetPaymentExternalIdNotFound" "IikonetPaymentSumLessThanMarketingDiscount" "DiscountCardNotFound" "DiscountCardTypeModeForbidden" "Iikocard5PaymentAdditionalDataCanNotBeParsed" "Iikocard5PaymentExternalIdNotFound" "Iikocard5PaymentSumLessThanMarketingDiscount" "Iikocard5PaymentCanNotCreateCustomData" "CourierIdDoesNotExist" "CourierDoesNotOwnOrder" "WrongDeliveryStatus" "CanNotAssignCourierToOrder" "UserNotFoundByExternalPassword" "UserNotFound" "Iikocard51PaymentAdditionalDataCanNotBeParsed" "Iikocard51PaymentCredentialNotFound" "Iikocard51PaymentSearchScopeNotFound" "ComboDuplicated" "InvalidReferenceToCombo" "InvalidComboItemsAmount" "InvalidComboItemsGuest" "InvalidReferenceToGuest" "GuestDuplicated" "GuestNameNotSpecified" "OrderTypeNotFound" "OrderServiceTypeDoesNotMatchSelfServiceMode" "DeliveryDateNotSpecified" "OrderStatusChangedInIikoFront" "PaymentAdditionalDataTooLong" "PaymentSumShouldBePositive" "DiscountSumNotSpecified" "InvalidDiscountItem" "InternalServerError"
     * Error code.
     * @var string
     */
    public $code;

    /**
     * Nonlocalized message
     * @var string
     */
    public $message;

    /**
     * Localized message
     * @var string
     */
    public $description;

    /**
     * Additional information
     * @var mixed
     */
    public $additionalData;
}