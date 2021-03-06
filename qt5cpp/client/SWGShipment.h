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
 * SWGShipment.h
 * 
 * 
 */

#ifndef SWGShipment_H_
#define SWGShipment_H_

#include <QJsonObject>


#include "SWGStop.h"
#include <QList>
#include <QString>

#include "SWGObject.h"


namespace Swagger {

class SWGShipment: public SWGObject {
public:
    SWGShipment();
    SWGShipment(QString* json);
    virtual ~SWGShipment();
    void init();
    void cleanup();

    QString asJson ();
    QJsonObject* asJsonObject();
    void fromJsonObject(QJsonObject &json);
    SWGShipment* fromJson(QString &jsonString);

    QString* getId();
    void setId(QString* id);

    QString* getName();
    void setName(QString* name);

    qint32 getPriority();
    void setPriority(qint32 priority);

    SWGStop* getPickup();
    void setPickup(SWGStop* pickup);

    SWGStop* getDelivery();
    void setDelivery(SWGStop* delivery);

    QList<qint32>* getSize();
    void setSize(QList<qint32>* size);

    QList<QString*>* getRequiredSkills();
    void setRequiredSkills(QList<QString*>* required_skills);

    QList<QString*>* getAllowedVehicles();
    void setAllowedVehicles(QList<QString*>* allowed_vehicles);


private:
    QString* id;
    QString* name;
    qint32 priority;
    SWGStop* pickup;
    SWGStop* delivery;
    QList<qint32>* size;
    QList<QString*>* required_skills;
    QList<QString*>* allowed_vehicles;
};

}

#endif /* SWGShipment_H_ */
