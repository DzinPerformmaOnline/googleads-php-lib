<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PremiumRateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\AdUnitPremiumFeature',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthPremiumFeature',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserPremiumFeature',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguagePremiumFeature',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\ContentBundlePremiumFeature',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\CustomTargetingPremiumFeature',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\DaypartPremiumFeature',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapabilityPremiumFeature',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategoryPremiumFeature',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturerPremiumFeature',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\FrequencyCapPremiumFeature',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\GeographyPremiumFeature',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrierPremiumFeature',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemPremiumFeature',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\PlacementPremiumFeature',
      'PremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\PremiumFeature',
      'PremiumRate' => 'Google\\AdsApi\\Dfp\\v201805\\PremiumRate',
      'PremiumRateError' => 'Google\\AdsApi\\Dfp\\v201805\\PremiumRateError',
      'PremiumRatePage' => 'Google\\AdsApi\\Dfp\\v201805\\PremiumRatePage',
      'PremiumRateValue' => 'Google\\AdsApi\\Dfp\\v201805\\PremiumRateValue',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201805\\RangeError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\UnknownPremiumFeature',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\UserDomainPremiumFeature',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionPremiumFeature',
      'createPremiumRatesResponse' => 'Google\\AdsApi\\Dfp\\v201805\\createPremiumRatesResponse',
      'getPremiumRatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getPremiumRatesByStatementResponse',
      'updatePremiumRatesResponse' => 'Google\\AdsApi\\Dfp\\v201805\\updatePremiumRatesResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/PremiumRateService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates a list of new {@link PremiumRate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201805\PremiumRate[] $premiumRates
     * @return \Google\AdsApi\Dfp\v201805\PremiumRate[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function createPremiumRates(array $premiumRates)
    {
      return $this->__soapCall('createPremiumRates', array(array('premiumRates' => $premiumRates)))->getRval();
    }

    /**
     * Gets a {@link PremiumRatePage} of {@link PremiumRate} objects that
     * satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link PremiumRate#id}</td>
     * </tr>
     * <tr>
     * <td>{@code rateCardId}</td>
     * <td>{@link PremiumRate#rateCardId}</td>
     * </tr>
     * <tr>
     * <td>{@code pricingMethod}</td>
     * <td>{@link PremiumRate#pricingMethod}</td>
     * </tr>
     * </table>
     *
     * list of premium rates.
     *
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\PremiumRatePage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getPremiumRatesByStatement(\Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getPremiumRatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link PremiumRate} objects.
     *
     * @param \Google\AdsApi\Dfp\v201805\PremiumRate[] $premiumRates
     * @return \Google\AdsApi\Dfp\v201805\PremiumRate[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function updatePremiumRates(array $premiumRates)
    {
      return $this->__soapCall('updatePremiumRates', array(array('premiumRates' => $premiumRates)))->getRval();
    }

}
