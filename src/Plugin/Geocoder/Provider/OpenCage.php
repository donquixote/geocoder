<?php

namespace Drupal\geocoder\Plugin\Geocoder\Provider;

use Drupal\geocoder\ProviderUsingHandlerWithAdapterBase;

/**
 * Provides an OpenCage geocoder provider plugin.
 *
 * @GeocoderProvider(
 *   id = "opencage",
 *   name = "OpenCage",
 *   handler = "",
 *   arguments = {
 *     "apiKey" = NULL,
 *     "useSsl" = FALSE,
 *     "locale" = NULL
 *   }
 * )
 */
class OpenCage extends ProviderUsingHandlerWithAdapterBase {}
