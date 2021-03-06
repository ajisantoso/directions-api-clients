# coding: utf-8

"""
    GraphHopper Directions API

    You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.

    OpenAPI spec version: 1.0.0
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class RouteResponse(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """


    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'paths': 'list[RouteResponsePath]',
        'info': 'ResponseInfo'
    }

    attribute_map = {
        'paths': 'paths',
        'info': 'info'
    }

    def __init__(self, paths=None, info=None):
        """
        RouteResponse - a model defined in Swagger
        """

        self._paths = None
        self._info = None

        if paths is not None:
          self.paths = paths
        if info is not None:
          self.info = info

    @property
    def paths(self):
        """
        Gets the paths of this RouteResponse.

        :return: The paths of this RouteResponse.
        :rtype: list[RouteResponsePath]
        """
        return self._paths

    @paths.setter
    def paths(self, paths):
        """
        Sets the paths of this RouteResponse.

        :param paths: The paths of this RouteResponse.
        :type: list[RouteResponsePath]
        """

        self._paths = paths

    @property
    def info(self):
        """
        Gets the info of this RouteResponse.

        :return: The info of this RouteResponse.
        :rtype: ResponseInfo
        """
        return self._info

    @info.setter
    def info(self, info):
        """
        Sets the info of this RouteResponse.

        :param info: The info of this RouteResponse.
        :type: ResponseInfo
        """

        self._info = info

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
        if not isinstance(other, RouteResponse):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
