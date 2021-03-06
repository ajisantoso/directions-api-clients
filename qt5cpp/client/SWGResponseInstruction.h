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

/*
 * SWGResponseInstruction.h
 * 
 * 
 */

#ifndef SWGResponseInstruction_H_
#define SWGResponseInstruction_H_

#include <QJsonObject>


#include <QList>
#include <QString>

#include "SWGObject.h"


namespace Swagger {

class SWGResponseInstruction: public SWGObject {
public:
    SWGResponseInstruction();
    SWGResponseInstruction(QString* json);
    virtual ~SWGResponseInstruction();
    void init();
    void cleanup();

    QString asJson ();
    QJsonObject* asJsonObject();
    void fromJsonObject(QJsonObject &json);
    SWGResponseInstruction* fromJson(QString &jsonString);

    QString* getText();
    void setText(QString* text);

    QString* getStreetName();
    void setStreetName(QString* street_name);

    double getDistance();
    void setDistance(double distance);

    qint32 getTime();
    void setTime(qint32 time);

    QList<qint32>* getInterval();
    void setInterval(QList<qint32>* interval);

    qint32 getSign();
    void setSign(qint32 sign);

    QString* getAnnotationText();
    void setAnnotationText(QString* annotation_text);

    qint32 getAnnotationImportance();
    void setAnnotationImportance(qint32 annotation_importance);

    qint32 getExitNumber();
    void setExitNumber(qint32 exit_number);

    double getTurnAngle();
    void setTurnAngle(double turn_angle);


private:
    QString* text;
    QString* street_name;
    double distance;
    qint32 time;
    QList<qint32>* interval;
    qint32 sign;
    QString* annotation_text;
    qint32 annotation_importance;
    qint32 exit_number;
    double turn_angle;
};

}

#endif /* SWGResponseInstruction_H_ */
