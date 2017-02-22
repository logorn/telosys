# SQL Schema Structure

A collection of views to help MySQL developer get insight in to telosys Database usage.

This Documentation show how tables are be defined.

## bus_line

Structures (1.1)

    mysql> desc bus_line;
    
    +------------------------------------+--------------+------+-----+---------+----------------+
    | Field                              | Type         | Null | Key | Default | Extra          |
    +------------------------------------+--------------+------+-----+---------+----------------+
    | id                                 | int(11)      | NO   | PRI | NULL    | auto_increment |
    | commercial_sense                   | varchar(255) | YES  |     | NULL    |                |
    | full_label                         | varchar(255) | YES  |     | NULL    |                |
    | code                               | varchar(255) | YES  | UNI | NULL    |                |
    | short_name                         | varchar(255) | YES  |     | NULL    |                |
    | line_id                            | varchar(255) | YES  |     | NULL    |                |
    | departure_start_point_name         | varchar(255) | YES  |     | NULL    |                |
    | arrive_stop_point_name             | varchar(255) | YES  |     | NULL    |                |
    | departure_start_point_id           | varchar(255) | YES  |     | NULL    |                |
    | arrive_stop_point_id               | varchar(255) | YES  |     | NULL    |                |
    | internal_id                        | varchar(255) | YES  |     | NULL    |                |
    | type                               | varchar(255) | YES  |     | NULL    |                |
    | is_accessible_for_disabled_persons | tinyint(1)   | NO   |     | 0       |                |
    | record_id                          | varchar(255) | YES  |     | NULL    |                |
    +------------------------------------+--------------+------+-----+---------+----------------+
    
    14 rows in set (0.00 sec)

## client

Structures (2.1)

    mysql> describe client;
    
    +-------------------------+--------------+------+-----+---------+----------------+
    | Field                   | Type         | Null | Key | Default | Extra          |
    +-------------------------+--------------+------+-----+---------+----------------+
    | id                      | int(11)      | NO   | PRI | NULL    | auto_increment |
    | initiation_date         | datetime     | YES  |     | NULL    |                |
    | terminal                | int(11)      | YES  |     | NULL    |                |
    | session                 | varchar(255) | YES  |     | NULL    |                |
    | agent                   | varchar(255) | YES  |     | NULL    |                |
    | card                    | varchar(255) | YES  |     | NULL    |                |
    | carrier_number          | varchar(255) | YES  |     | NULL    |                |
    | carrier_name            | varchar(255) | NO   |     | NULL    |                |
    | carrier_first_name      | varchar(255) | NO   |     | NULL    |                |
    | carrier_address         | varchar(255) | NO   |     | NULL    |                |
    | carrier_postal_code     | varchar(255) | YES  |     | NULL    |                |
    | carrier_town            | varchar(255) | YES  |     | NULL    |                |
    | carrier_contract_number | varchar(255) | YES  |     | NULL    |                |
    | transaction_id          | varchar(255) | YES  |     | NULL    |                |
    +-------------------------+--------------+------+-----+---------+----------------+
    14 rows in set (0.12 sec)