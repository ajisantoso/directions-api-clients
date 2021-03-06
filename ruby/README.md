# directions-api-client

DirectionsApiClient - the Ruby gem for the GraphHopper Directions API

You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.

This SDK is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Package version: 0.10-SNAPSHOT
- Build package: io.swagger.codegen.languages.RubyClientCodegen

## Installation

### Build a gem

To build the Ruby code into a gem:

```shell
gem build directions-api-client.gemspec
```

Then either install the gem locally:

```shell
gem install ./directions-api-client-0.10-SNAPSHOT.gem
```
(for development, run `gem install --dev ./directions-api-client-0.10-SNAPSHOT.gem` to install the development dependencies)

or publish the gem to a gem hosting service, e.g. [RubyGems](https://rubygems.org/).

Finally add this to the Gemfile:

    gem 'directions-api-client', '~> 0.10-SNAPSHOT'

### Install from Git

If the Ruby gem is hosted at a git repository: https://github.com/GIT_USER_ID/GIT_REPO_ID, then add the following in the Gemfile:

    gem 'directions-api-client', :git => 'https://github.com/GIT_USER_ID/GIT_REPO_ID.git'

### Include the Ruby code directly

Include the Ruby code directly using `-I` as follows:

```shell
ruby -Ilib script.rb
```

## Getting Started

Please follow the [installation](#installation) procedure and then run the following code:
```ruby
# Load the gem
require 'directions-api-client'

api_instance = DirectionsApiClient::GeocodingApi.new

key = "key_example" # String | Get your key at graphhopper.com

opts = { 
  q: "q_example", # String | If you do forward geocoding, then this would be a textual description of the adress you are looking for. If you do reverse geocoding this would be in lat,lon.
  locale: "locale_example", # String | Display the search results for the specified locale. Currently French (fr), English (en), German (de) and Italian (it) are supported. If the locale wasn't found the default (en) is used.
  limit: 56, # Integer | Specify the maximum number of returned results
  reverse: true, # BOOLEAN | Set to true to do a reverse Geocoding request
  point: "point_example", # String | The location bias in the format 'latitude,longitude' e.g. point=45.93272,11.58803
  provider: "provider_example" # String | Can be either, default, nominatim, opencagedata
}

begin
  #Execute a Geocoding request
  result = api_instance.geocode_get(key, opts)
  p result
rescue DirectionsApiClient::ApiError => e
  puts "Exception when calling GeocodingApi->geocode_get: #{e}"
end

```

## Documentation for API Endpoints

All URIs are relative to *https://graphhopper.com/api/1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DirectionsApiClient::GeocodingApi* | [**geocode_get**](docs/GeocodingApi.md#geocode_get) | **GET** /geocode | Execute a Geocoding request
*DirectionsApiClient::IsochroneApi* | [**isochrone_get**](docs/IsochroneApi.md#isochrone_get) | **GET** /isochrone | Isochrone Request
*DirectionsApiClient::MatrixApi* | [**matrix_get**](docs/MatrixApi.md#matrix_get) | **GET** /matrix | Matrix API
*DirectionsApiClient::MatrixApi* | [**matrix_post**](docs/MatrixApi.md#matrix_post) | **POST** /matrix | Matrix API Post
*DirectionsApiClient::RoutingApi* | [**route_get**](docs/RoutingApi.md#route_get) | **GET** /route | Routing Request
*DirectionsApiClient::SolutionApi* | [**get_solution**](docs/SolutionApi.md#get_solution) | **GET** /vrp/solution/{jobId} | Return the solution associated to the jobId
*DirectionsApiClient::VrpApi* | [**post_vrp**](docs/VrpApi.md#post_vrp) | **POST** /vrp/optimize | Solves vehicle routing problems


## Documentation for Models

 - [DirectionsApiClient::Activity](docs/Activity.md)
 - [DirectionsApiClient::Address](docs/Address.md)
 - [DirectionsApiClient::Algorithm](docs/Algorithm.md)
 - [DirectionsApiClient::Configuration](docs/Configuration.md)
 - [DirectionsApiClient::CostMatrix](docs/CostMatrix.md)
 - [DirectionsApiClient::CostMatrixData](docs/CostMatrixData.md)
 - [DirectionsApiClient::CostMatrixDataInfo](docs/CostMatrixDataInfo.md)
 - [DirectionsApiClient::GHError](docs/GHError.md)
 - [DirectionsApiClient::GHErrorHints](docs/GHErrorHints.md)
 - [DirectionsApiClient::GeocodingLocation](docs/GeocodingLocation.md)
 - [DirectionsApiClient::GeocodingPoint](docs/GeocodingPoint.md)
 - [DirectionsApiClient::GeocodingResponse](docs/GeocodingResponse.md)
 - [DirectionsApiClient::IsochroneResponse](docs/IsochroneResponse.md)
 - [DirectionsApiClient::IsochroneResponsePolygon](docs/IsochroneResponsePolygon.md)
 - [DirectionsApiClient::IsochroneResponsePolygonGeometry](docs/IsochroneResponsePolygonGeometry.md)
 - [DirectionsApiClient::IsochroneResponsePolygonProperties](docs/IsochroneResponsePolygonProperties.md)
 - [DirectionsApiClient::JobId](docs/JobId.md)
 - [DirectionsApiClient::Location](docs/Location.md)
 - [DirectionsApiClient::MatrixRequest](docs/MatrixRequest.md)
 - [DirectionsApiClient::MatrixResponse](docs/MatrixResponse.md)
 - [DirectionsApiClient::ModelBreak](docs/ModelBreak.md)
 - [DirectionsApiClient::Objective](docs/Objective.md)
 - [DirectionsApiClient::Relation](docs/Relation.md)
 - [DirectionsApiClient::Request](docs/Request.md)
 - [DirectionsApiClient::Response](docs/Response.md)
 - [DirectionsApiClient::ResponseCoordinates](docs/ResponseCoordinates.md)
 - [DirectionsApiClient::ResponseCoordinatesArray](docs/ResponseCoordinatesArray.md)
 - [DirectionsApiClient::ResponseInfo](docs/ResponseInfo.md)
 - [DirectionsApiClient::ResponseInstruction](docs/ResponseInstruction.md)
 - [DirectionsApiClient::ResponseInstructions](docs/ResponseInstructions.md)
 - [DirectionsApiClient::Route](docs/Route.md)
 - [DirectionsApiClient::RoutePoint](docs/RoutePoint.md)
 - [DirectionsApiClient::RouteResponse](docs/RouteResponse.md)
 - [DirectionsApiClient::RouteResponsePath](docs/RouteResponsePath.md)
 - [DirectionsApiClient::Routing](docs/Routing.md)
 - [DirectionsApiClient::Service](docs/Service.md)
 - [DirectionsApiClient::Shipment](docs/Shipment.md)
 - [DirectionsApiClient::Solution](docs/Solution.md)
 - [DirectionsApiClient::SolutionUnassigned](docs/SolutionUnassigned.md)
 - [DirectionsApiClient::Stop](docs/Stop.md)
 - [DirectionsApiClient::TimeWindow](docs/TimeWindow.md)
 - [DirectionsApiClient::Vehicle](docs/Vehicle.md)
 - [DirectionsApiClient::VehicleType](docs/VehicleType.md)


## Documentation for Authorization


### api_key

- **Type**: API key
- **API key parameter name**: key
- **Location**: URL query string

