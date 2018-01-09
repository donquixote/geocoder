<?php

namespace Drupal\geocoder\Plugin\Geocoder\Provider;

use Drupal\geocoder\ProviderUsingHandlerWithAdapterBase;

/**
 * Provides a TomTom geocoder provider plugin.
 *
 * @GeocoderProvider(
 *   id = "tomtom",
 *   name = "TomTom",
 *   handler = "\Geocoder\Provider\TomTom",
 *   arguments = {
 *     "apiKey" = NULL,
 *     "locale" = NULL
 *   }
 * )
 */
class TomTom extends ProviderUsingHandlerWithAdapterBase {}
