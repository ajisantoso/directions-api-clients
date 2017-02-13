# coding: utf-8

"""
    GraphHopper Directions API

    With the GraphHopper Directions API you get reliable and fast web services for routing and more with world wide coverage. We offer A-to-B routing via the Routing API optionally with turn instructions and elevation data as well as route optimization with various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API. 

    OpenAPI spec version: 1.0.0
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class GHResponseInstruction(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, text=None, distance=None, time=None, interval=None, sign=None, annotation_text=None, annotation_importance=None, exit_number=None, turn_angle=None):
        """
        GHResponseInstruction - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'text': 'str',
            'distance': 'float',
            'time': 'int',
            'interval': 'list[int]',
            'sign': 'int',
            'annotation_text': 'str',
            'annotation_importance': 'int',
            'exit_number': 'int',
            'turn_angle': 'float'
        }

        self.attribute_map = {
            'text': 'text',
            'distance': 'distance',
            'time': 'time',
            'interval': 'interval',
            'sign': 'sign',
            'annotation_text': 'annotation_text',
            'annotation_importance': 'annotation_importance',
            'exit_number': 'exit_number',
            'turn_angle': 'turn_angle'
        }

        self._text = text
        self._distance = distance
        self._time = time
        self._interval = interval
        self._sign = sign
        self._annotation_text = annotation_text
        self._annotation_importance = annotation_importance
        self._exit_number = exit_number
        self._turn_angle = turn_angle

    @property
    def text(self):
        """
        Gets the text of this GHResponseInstruction.
        A description what the user has to do in order to follow the route. The language depends on the locale parameter.

        :return: The text of this GHResponseInstruction.
        :rtype: str
        """
        return self._text

    @text.setter
    def text(self, text):
        """
        Sets the text of this GHResponseInstruction.
        A description what the user has to do in order to follow the route. The language depends on the locale parameter.

        :param text: The text of this GHResponseInstruction.
        :type: str
        """

        self._text = text

    @property
    def distance(self):
        """
        Gets the distance of this GHResponseInstruction.
        The distance for this instruction, in meter

        :return: The distance of this GHResponseInstruction.
        :rtype: float
        """
        return self._distance

    @distance.setter
    def distance(self, distance):
        """
        Sets the distance of this GHResponseInstruction.
        The distance for this instruction, in meter

        :param distance: The distance of this GHResponseInstruction.
        :type: float
        """

        self._distance = distance

    @property
    def time(self):
        """
        Gets the time of this GHResponseInstruction.
        The duration for this instruction, in ms

        :return: The time of this GHResponseInstruction.
        :rtype: int
        """
        return self._time

    @time.setter
    def time(self, time):
        """
        Sets the time of this GHResponseInstruction.
        The duration for this instruction, in ms

        :param time: The time of this GHResponseInstruction.
        :type: int
        """

        self._time = time

    @property
    def interval(self):
        """
        Gets the interval of this GHResponseInstruction.
        An array containing the first and the last index (relative to paths[0].points) of the points for this instruction. This is useful to know for which part of the route the instructions are valid.

        :return: The interval of this GHResponseInstruction.
        :rtype: list[int]
        """
        return self._interval

    @interval.setter
    def interval(self, interval):
        """
        Sets the interval of this GHResponseInstruction.
        An array containing the first and the last index (relative to paths[0].points) of the points for this instruction. This is useful to know for which part of the route the instructions are valid.

        :param interval: The interval of this GHResponseInstruction.
        :type: list[int]
        """

        self._interval = interval

    @property
    def sign(self):
        """
        Gets the sign of this GHResponseInstruction.
        A number which specifies the sign to show e.g. for right turn etc <br>TURN_SHARP_LEFT = -3<br>TURN_LEFT = -2<br>TURN_SLIGHT_LEFT = -1<br>CONTINUE_ON_STREET = 0<br>TURN_SLIGHT_RIGHT = 1<br>TURN_RIGHT = 2<br>TURN_SHARP_RIGHT = 3<br>FINISH = 4<br>VIA_REACHED = 5<br>USE_ROUNDABOUT = 6

        :return: The sign of this GHResponseInstruction.
        :rtype: int
        """
        return self._sign

    @sign.setter
    def sign(self, sign):
        """
        Sets the sign of this GHResponseInstruction.
        A number which specifies the sign to show e.g. for right turn etc <br>TURN_SHARP_LEFT = -3<br>TURN_LEFT = -2<br>TURN_SLIGHT_LEFT = -1<br>CONTINUE_ON_STREET = 0<br>TURN_SLIGHT_RIGHT = 1<br>TURN_RIGHT = 2<br>TURN_SHARP_RIGHT = 3<br>FINISH = 4<br>VIA_REACHED = 5<br>USE_ROUNDABOUT = 6

        :param sign: The sign of this GHResponseInstruction.
        :type: int
        """

        self._sign = sign

    @property
    def annotation_text(self):
        """
        Gets the annotation_text of this GHResponseInstruction.
        optional - A text describing the instruction in more detail, e.g. like surface of the way, warnings or involved costs.

        :return: The annotation_text of this GHResponseInstruction.
        :rtype: str
        """
        return self._annotation_text

    @annotation_text.setter
    def annotation_text(self, annotation_text):
        """
        Sets the annotation_text of this GHResponseInstruction.
        optional - A text describing the instruction in more detail, e.g. like surface of the way, warnings or involved costs.

        :param annotation_text: The annotation_text of this GHResponseInstruction.
        :type: str
        """

        self._annotation_text = annotation_text

    @property
    def annotation_importance(self):
        """
        Gets the annotation_importance of this GHResponseInstruction.
        optional - 0 stands for INFO, 1 for warning, 2 for costs, 3 for costs and warning

        :return: The annotation_importance of this GHResponseInstruction.
        :rtype: int
        """
        return self._annotation_importance

    @annotation_importance.setter
    def annotation_importance(self, annotation_importance):
        """
        Sets the annotation_importance of this GHResponseInstruction.
        optional - 0 stands for INFO, 1 for warning, 2 for costs, 3 for costs and warning

        :param annotation_importance: The annotation_importance of this GHResponseInstruction.
        :type: int
        """

        self._annotation_importance = annotation_importance

    @property
    def exit_number(self):
        """
        Gets the exit_number of this GHResponseInstruction.
        optional - Only available for USE_ROUNDABOUT instructions. The count of exits at which the route leaves the roundabout.

        :return: The exit_number of this GHResponseInstruction.
        :rtype: int
        """
        return self._exit_number

    @exit_number.setter
    def exit_number(self, exit_number):
        """
        Sets the exit_number of this GHResponseInstruction.
        optional - Only available for USE_ROUNDABOUT instructions. The count of exits at which the route leaves the roundabout.

        :param exit_number: The exit_number of this GHResponseInstruction.
        :type: int
        """

        self._exit_number = exit_number

    @property
    def turn_angle(self):
        """
        Gets the turn_angle of this GHResponseInstruction.
        optional - Only available for USE_ROUNDABOUT instructions. The radian of the route within the roundabout - 0&lt;r&lt;2*PI for clockwise and -2PI&lt;r&lt;0 for counterclockwise transit. Null if the direction of rotation is undefined.

        :return: The turn_angle of this GHResponseInstruction.
        :rtype: float
        """
        return self._turn_angle

    @turn_angle.setter
    def turn_angle(self, turn_angle):
        """
        Sets the turn_angle of this GHResponseInstruction.
        optional - Only available for USE_ROUNDABOUT instructions. The radian of the route within the roundabout - 0&lt;r&lt;2*PI for clockwise and -2PI&lt;r&lt;0 for counterclockwise transit. Null if the direction of rotation is undefined.

        :param turn_angle: The turn_angle of this GHResponseInstruction.
        :type: float
        """

        self._turn_angle = turn_angle

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, GHResponseInstruction):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
