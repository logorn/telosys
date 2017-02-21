Scaffolding with Telosys
================================================================================

A Pragmatic scaffolding approach to build php api back-end with Symfony based on Telosys approach.

Goal
================================================================================

The project goal is to automatically deploy the configuration needed for an operational Symfony application based on php.

GETTING STARTED
================================================================================

In order to verify the proper functioning of the environment, I invite you to simply ping the appropriate controller.

Example: http://devstack.local/api/platform/telosys/v1.0/projects/pings

    http GET http://devstack.local/api/platform/telosys/v1.0/projects/pings

    curl -X GET http://devstack.local/api/platform/telosys/v1.0/projects/pings --header "Content-Type:application/json"

Response body with http:
    
    HTTP/1.1 200 OK
    Cache-Control: no-cache, private
    Connection: Keep-Alive
    Content-Type: application/json
    Date: Mon, 06 Feb 2017 09:53:56 GMT
    Keep-Alive: timeout=5, max=100
    Server: nginx/1.4.6 (Ubuntu)
    Transfer-Encoding: chunked
    X-Content-Type-Options: nosniff
    X-Frame-Options: sameorigin
    X-Powered-By: PHP/7.0.15-1+deb.sury.org~trusty+1
    {
        "message": "pong"
    }


Example: http://devstack.local/api/platform/telosys/v1.0/projects/buslines

    http GET http://devstack.local/api/platform/telosys/v1.0/projects/buslines

Response body with http:

    HTTP/1.1 200 OK  
    Cache-Control: no-cache, private
    Connection: Keep-Alive
    Content-Type: application/json
    Date: Mon, 06 Feb 2017 14:37:30 GMT
    Keep-Alive: timeout=5, max=100
    Server: nginx/1.4.6 (Ubuntu)
    Transfer-Encoding: chunked
    X-Content-Type-Options: nosniff
    X-Frame-Options: sameorigin

    [
        {
            "commercialSense": "Aller",
            "fullLabel": "Rennes (Clos Courtel) -> Rennes (Triangle)",
            "code": "0032-A-1660-1441",
            "shortName": "32",
            "lineId": "0032",
            "departureStartPointName": "Clos Courtel",
            "arriveStopPointName": "Triangle",
            "departureStartPointId": "1660",
            "arriveStopPointId": "1441",
            "internalId": "0032-A-1660-1441",
            "type": "secondaire",
            "isAccessibleForDisabledPersons": true,
            "recordId": "79bd65e3ba921b2afd8ac514e09d6b3a9938d0dc",
            "id": 1
        },
        {
            "commercialSense": "Retour",
            "fullLabel": "Rennes (Triangle) -> Rennes (Clos Courtel)",
            "code": "0032-B-1441-1660",
            "shortName": "32",
            "lineId": "0032",
            "departureStartPointName": "Triangle",
            "arriveStopPointName": "Clos Courtel",
            "departureStartPointId": "1441",
            "arriveStopPointId": "1660",
            "internalId": "0032-B-1441-1660",
            "type": "secondaire",
            "isAccessibleForDisabledPersons": true,
            "recordId": "6ec1516ccd4390c25197f2de99cb259ceb104684",
            "id": 2
        }
    ]

## Technologies

The technologies used for this api application are:

- Symfony 3 as main application framework.
- Doctrine Orm 2.
- Doctrine Odm
- Jms serializer
- Fos rest-bundle
- Nelmio cors
- Guzzle client
- MongoDb
- MySql
- ElasticSearch
- ElasticsearchDSL

## Postman

You have API calls by operating postman.

## Update Schema and populate data

No need to detail them because known of any good developer of symfony.

## Author Information

This application was created in 2017 by Hugues MAILLET, inspired by the work of many.
