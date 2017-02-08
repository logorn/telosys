# SQL Schema Structure

A collection of views to help MySQL developer get insight in to telosys Database usage.

This Documentation show how tables are be defined.

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
