<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2021-07-03
* Specification: ttps://github.com/amzn/selling-partner-api-models/blob/main/models/listings-items-api-model/listingsItems_2020-09-01.json
* Source MD5 signature: 3aa9511995c072bbd45fd5307e5fe0d4
*
*
* Selling Partner API for Listings Items
* The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API.
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class ListingsItems extends Client {

  /**
  * Operation deleteListingsItem
  *
  * @param string $sellerId A selling partner identifier, such as a merchant account or vendor code.
  * @param string $sku A selling partner provided identifier for an Amazon listing.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A comma-delimited list of Amazon marketplace identifiers for the request.
  *    - *issueLocale* string - A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". Localized messages default to "en_US" when a localization is not available in the specified locale.
  *
  */
  public function deleteListingsItem($sellerId, $sku, $queryParams = [])
  {
    return $this->send("/listings/2020-09-01/items/{$sellerId}/{$sku}", [
      'method' => 'DELETE',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation patchListingsItem
  *
  * @param string $sellerId A selling partner identifier, such as a merchant account or vendor code.
  * @param string $sku A selling partner provided identifier for an Amazon listing.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A comma-delimited list of Amazon marketplace identifiers for the request.
  *    - *issueLocale* string - A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". Localized messages default to "en_US" when a localization is not available in the specified locale.
  *
  */
  public function patchListingsItem($sellerId, $sku, $queryParams = [], $body = [])
  {
    return $this->send("/listings/2020-09-01/items/{$sellerId}/{$sku}", [
      'method' => 'PATCH',
      'query' => $queryParams,
      'json' => $body
    ]);
  }

  /**
  * Operation putListingsItem
  *
  * @param string $sellerId A selling partner identifier, such as a merchant account or vendor code.
  * @param string $sku A selling partner provided identifier for an Amazon listing.
  *
  * @param array $queryParams
  *    - *marketplaceIds* array - A comma-delimited list of Amazon marketplace identifiers for the request.
  *    - *issueLocale* string - A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: "en_US", "fr_CA", "fr_FR". Localized messages default to "en_US" when a localization is not available in the specified locale.
  *
  */
  public function putListingsItem($sellerId, $sku, $queryParams = [], $body = [])
  {
    return $this->send("/listings/2020-09-01/items/{$sellerId}/{$sku}", [
      'method' => 'PUT',
      'query' => $queryParams,
      'json' => $body
    ]);
  }
}
