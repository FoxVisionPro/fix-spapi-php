<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2022-05-26
* Specification: https://github.com/amzn/selling-partner-api-models/blob/main/models/vendor-orders-api-model/vendorOrders.json
* Source MD5 signature: c15d4e898f3928505496c346d8c45929
*
*
* Selling Partner API for Retail Procurement Orders
* The Selling Partner API for Retail Procurement Orders provides programmatic access to vendor orders data.
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class VendorOrders extends Client {

  /**
  * Operation getPurchaseOrders
  *
  * @param array $queryParams
  *    - *limit* integer - The limit to the number of records returned. Default value is 100 records.
  *    - *createdAfter* string - Purchase orders that became available after this time will be included in the result. Must be in ISO-8601 date/time format.
  *    - *createdBefore* string - Purchase orders that became available before this time will be included in the result. Must be in ISO-8601 date/time format.
  *    - *sortOrder* string - Sort in ascending or descending order by purchase order creation date.
  *    - *nextToken* string - Used for pagination when there is more purchase orders than the specified result size limit. The token value is returned in the previous API call
  *    - *includeDetails* string - When true, returns purchase orders with complete details. Otherwise, only purchase order numbers are returned. Default value is true.
  *    - *changedAfter* string - Purchase orders that changed after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
  *    - *changedBefore* string - Purchase orders that changed before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
  *    - *poItemState* string - Current state of the purchase order item. If this value is Cancelled, this API will return purchase orders which have one or more items cancelled by Amazon with updated item quantity as zero.
  *    - *isPOChanged* string - When true, returns purchase orders which were modified after the order was placed. Vendors are required to pull the changed purchase order and fulfill the updated purchase order and not the original one. Default value is false.
  *    - *purchaseOrderState* string - Filters purchase orders based on the purchase order state.
  *    - *orderingVendorCode* string - Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in the filter, all purchase orders for all of the vendor codes that exist in the vendor group used to authorize the API client application are returned.
  *
  */
  public function getPurchaseOrders($queryParams = [])
  {
    return $this->send("/vendor/orders/v1/purchaseOrders", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  public function getPurchaseOrdersAsync($queryParams = [])
  {
    return $this->sendAsync("/vendor/orders/v1/purchaseOrders", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation getPurchaseOrder
  *
  * @param string $purchaseOrderNumber The purchase order identifier for the order that you want. Formatting Notes: 8-character alpha-numeric code.
  *
  */
  public function getPurchaseOrder($purchaseOrderNumber)
  {
    return $this->send("/vendor/orders/v1/purchaseOrders/{$purchaseOrderNumber}", [
      'method' => 'GET',
    ]);
  }

  public function getPurchaseOrderAsync($purchaseOrderNumber)
  {
    return $this->sendAsync("/vendor/orders/v1/purchaseOrders/{$purchaseOrderNumber}", [
      'method' => 'GET',
    ]);
  }

  /**
  * Operation submitAcknowledgement
  *
  */
  public function submitAcknowledgement($body = [])
  {
    return $this->send("/vendor/orders/v1/acknowledgements", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  public function submitAcknowledgementAsync($body = [])
  {
    return $this->sendAsync("/vendor/orders/v1/acknowledgements", [
      'method' => 'POST',
      'json' => $body
    ]);
  }

  /**
  * Operation getPurchaseOrdersStatus
  *
  * @param array $queryParams
  *    - *limit* integer - The limit to the number of records returned. Default value is 100 records.
  *    - *sortOrder* string - Sort in ascending or descending order by purchase order creation date.
  *    - *nextToken* string - Used for pagination when there are more purchase orders than the specified result size limit.
  *    - *createdAfter* string - Purchase orders that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
  *    - *createdBefore* string - Purchase orders that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
  *    - *updatedAfter* string - Purchase orders for which the last purchase order update happened after this timestamp will be included in the result. Must be in ISO-8601 date/time format.
  *    - *updatedBefore* string - Purchase orders for which the last purchase order update happened before this timestamp will be included in the result. Must be in ISO-8601 date/time format.
  *    - *purchaseOrderNumber* string - Provides purchase order status for the specified purchase order number.
  *    - *purchaseOrderStatus* string - Filters purchase orders based on the specified purchase order status. If not included in filter, this will return purchase orders for all statuses.
  *    - *itemConfirmationStatus* string - Filters purchase orders based on their item confirmation status. If the item confirmation status is not included in the filter, purchase orders for all confirmation statuses are included.
  *    - *itemReceiveStatus* string - Filters purchase orders based on the purchase order's item receive status. If the item receive status is not included in the filter, purchase orders for all receive statuses are included.
  *    - *orderingVendorCode* string - Filters purchase orders based on the specified ordering vendor code. This value should be same as 'sellingParty.partyId' in the purchase order. If not included in filter, all purchase orders for all the vendor codes that exist in the vendor group used to authorize API client application are returned.
  *    - *shipToPartyId* string - Filters purchase orders for a specific buyer's Fulfillment Center/warehouse by providing ship to location id here. This value should be same as 'shipToParty.partyId' in the purchase order. If not included in filter, this will return purchase orders for all the buyer's warehouses used for vendor group purchase orders.
  *
  */
  public function getPurchaseOrdersStatus($queryParams = [])
  {
    return $this->send("/vendor/orders/v1/purchaseOrdersStatus", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  public function getPurchaseOrdersStatusAsync($queryParams = [])
  {
    return $this->sendAsync("/vendor/orders/v1/purchaseOrdersStatus", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }
}
