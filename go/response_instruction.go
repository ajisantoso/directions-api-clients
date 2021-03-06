/* 
 * GraphHopper Directions API
 *
 * You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

package graphhopper

type ResponseInstruction struct {

	// A description what the user has to do in order to follow the route. The language depends on the locale parameter.
	Text string `json:"text,omitempty"`

	// The name of the street to turn onto in order to follow the route.
	StreetName string `json:"street_name,omitempty"`

	// The distance for this instruction, in meter
	Distance float64 `json:"distance,omitempty"`

	// The duration for this instruction, in ms
	Time int32 `json:"time,omitempty"`

	// An array containing the first and the last index (relative to paths[0].points) of the points for this instruction. This is useful to know for which part of the route the instructions are valid.
	Interval []int32 `json:"interval,omitempty"`

	// A number which specifies the sign to show e.g. for right turn etc <br>TURN_SHARP_LEFT = -3<br>TURN_LEFT = -2<br>TURN_SLIGHT_LEFT = -1<br>CONTINUE_ON_STREET = 0<br>TURN_SLIGHT_RIGHT = 1<br>TURN_RIGHT = 2<br>TURN_SHARP_RIGHT = 3<br>FINISH = 4<br>VIA_REACHED = 5<br>USE_ROUNDABOUT = 6
	Sign int32 `json:"sign,omitempty"`

	// optional - A text describing the instruction in more detail, e.g. like surface of the way, warnings or involved costs.
	AnnotationText string `json:"annotation_text,omitempty"`

	// optional - 0 stands for INFO, 1 for warning, 2 for costs, 3 for costs and warning
	AnnotationImportance int32 `json:"annotation_importance,omitempty"`

	// optional - Only available for USE_ROUNDABOUT instructions. The count of exits at which the route leaves the roundabout.
	ExitNumber int32 `json:"exit_number,omitempty"`

	// optional - Only available for USE_ROUNDABOUT instructions. The radian of the route within the roundabout - 0&lt;r&lt;2*PI for clockwise and -2PI&lt;r&lt;0 for counterclockwise transit. Null if the direction of rotation is undefined.
	TurnAngle float64 `json:"turn_angle,omitempty"`
}
