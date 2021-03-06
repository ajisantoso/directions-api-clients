/**
 * GraphHopper Directions API
 * You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */

package io.swagger.client.model


case class Route (
  /* id of vehicle that operates route */
  vehicleId: Option[String],
  /* distance of route in meter */
  distance: Option[Long],
  /* transport time of route in ms */
  transportTime: Option[Long],
  /* completion time of route in ms */
  completionTime: Option[Long],
  /* waiting time of route in ms */
  waitingTime: Option[Long],
  /* array of activities */
  activities: Option[List[Activity]],
  /* array of route planning points */
  points: Option[List[RoutePoint]]
)

