CREATE TABLE service
(
  userID  int,
  serviceID int,
  file varchar(255),
  dateUp  Datetime,
  dateSt  Datetime,
  length  int,
  type  varchar(20),
  descri varchar(255),
  Primary key (serviceID),
  Foreign key (userID)  references user(id)

);
