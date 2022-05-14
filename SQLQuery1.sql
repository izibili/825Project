Use GIZIBILI;

create table Users (
	UserID varchar(20) NOT NULL unique,
	FName varchar(50) NOT NULL,
	LName varchar(50) NOT NULL,
	Gender varchar(10) NOT NULL,
	Date_of_Birth date NOT NULL,
	Primary key (UserID)
);
Insert Into Users Values ('flew12', 'florence', 'shawn', 'female', '1941-04-14');
Insert into Users Values ('dew43', 'delvin', 'sheep', 'male', '1965-06-28');
insert into Users values ('s.Gonzal', 'Shea', 'Gonzales', 'male', '1998-09-12');

create table Email (
	EmailID int NOT NULL unique,
	Email varchar(60) NOT NULL,
	Passwords varchar(100) NOT NULL,
	Primary key (EmailID)
);
Insert into Email values (200031, 'fewl@gmail.com', 'feritoinv'),
						(200032, 'dewwn@fore.com', 'swenrrs@11'),
						(200033, 'sgonazalos@bere.com', '@froinrs'),
						(200034, 'john.dock@investor.edu', 'econew23'),
						(200035, 'sed.sapien@google.ca', 'treoiwen4321');

Create table BusinessInfo(
	BizID int NOT NULL unique,
    Primary Key (BizID)
);

	insert into BusinessInfo values (300001);
	insert into BusinessInfo values (300002);
	insert into BusinessInfo values (300003);

Create table Investor (
	InvestorId int Not Null unique,
    Primary key (InvestorId)
);

insert into Investor values (01);
insert into Investor values (02);
insert into Investor values (03);

create table Lang(
	LanguageID int not null unique,
    LangName varchar(100) not null unique,
    Primary key (LangName)
);

insert into Lang values (90001, 'English');
insert into Lang values (90002, 'Spanish');
insert into Lang values (90003, 'Swahili');

create table Zip(
	ZipCode varchar(10) Not Null unique,
    State varchar(20) Not Null unique,
    County varchar(20) Null,
    Primary Key (ZipCode)
);
insert into Zip values ('66801', 'Kansas', 'Lyon');
insert into Zip values ('100211', 'Lagos', 'Maryland');
insert into Zip values ('M94A', 'Toronto', 'Ontario');


create table Country(
	CountryID int not null unique,
	Country varchar(50) not null unique,
    primary key (Country)
);

insert into Country (CountryID, Country) values
	(1, 'Afghanistan'),(2, 'Albania'),(3, 'Algeria'), (4, 'Andorra'),  (5, 'Angola'),
    (6, 'Anguilla'), (7, 'Antigua & Barbuda'), (8, 'Argentina'), (9, 'Armenia'),
    (10, 'Australia'), (11, 'Austria'), (12, 'Azerbaijan'), (13, 'Bahamas'),
    (14, 'Bangladesh'), (15, 'Canada'), (16, 'China'), (17, 'France'), (18, 'Germany'),
    (19, 'Ghana'), (20, 'Great Britain'), (21, 'Kenya'), (22, 'Malta'),
    (23, 'Nigeria'), (24, 'Paraguay'), (25, 'Saudi Arabia'), (26, 'Sweden'), (27, 'United States of America'), (28, 'Zimbabwe');  

create table Address(
	Numbers int not null,
	UserID varchar(20) null,
    StreetNo varchar(5) Not Null,
    StreetName varchar(20) Not Null unique,
    Country varchar(50) Not Null,
    Primary key (Numbers),
    Foreign Key (UserID) References Users(UserID),
    Foreign Key (country) references Country(Country)
);

insert into Address values (600001, 'flew12', '3843', 'Merchant', 'United States of America');
insert into Address values (600002, 'dew43', '4302', 'Commercial', 'United States of America');
insert into Address values (600003, 's.Gonzal', '9320', 'Florines', 'Canada');


Create table Sector (
	SectorID int NOT Null unique,
	SectorName varchar(50) NOT NULL unique,
	BizID int NULL,
	UserID varchar(20) NULL,
	InvestorID int NULL,
    Primary key (SectorName),
	Foreign Key (BizID) References BusinessInfo(BizID),
	Foreign Key (UserID) References Users(UserID),
    Foreign Key (InvestorID) References Investor(InvestorID)
);
	Insert into Sector values (500001, 'Manufacturing', 300001, 'flew12', 01);
	Insert into Sector values (500002, 'Accomodation and Food Services', 300002, 'dew43', 02); 
    Insert into Sector Values (500003, 'Mining', 300003, 's.Gonzal', 03);


Alter table businessinfo	
	Add BizSector varchar(100) NULL,
	BizStart date Null, BizNetworth decimal(10,2) NUll,
	Presentation varchar(10) NULL,
	UserID varchar(20) NULL Foreign key (UserID) References Users(UserID),
	ZipCode varchar(10) NULL Foreign key (ZipCode) References Zip(ZipCode);

Insert into BusinessInfo (BizID,  BizSector, BizStart, BizNetworth, Presentation, UserID, ZipCode) 
	Values (300005, 'Accomodation and Food Services', '2004-05-24', 1030.43, 'Yes', 'dew43', '66801'),
			(300006, 'Manufacturing', '2020-03-14', '2000.00', 'No', 'flew12', 'M94A'),
			(300004, 'Mining', '2012-06-21', '3202.21', 'Yes', 's.Gonzal', '100211');

Alter table Investor
    Add FName varchar(20) Null, LName varchar(20) Null, 
	Capacity decimal(10,2) Null, CurrentInvestment varchar(150) null,
	SectorName Varchar(50) Null Foreign Key (SectorName) References Sector(SectorName),
    EmailID int Null Foreign key (EmailID) References Email(EmailID);

Insert into investor (InvestorID, FName, LName, Capacity,  CurrentInvestment, SectorName, EmailID) 
	values (4, 'John', 'Dock', '540000.00','none', 'Mining', 200034),
			(5, 'Philip','Avery', '430221.21', 'none', 'Manufacturing', 200035);

Create table Accounts (
	AccountID int not null,
    AccountType varchar(30) null,
    UserID varchar(20) null,
    InvestorID int null,
    Primary Key (AccountID),
    Foreign Key (UserID) References Users(UserID),
    Foreign Key (investorID) References Investor(InvestorID)
   
);

Insert into Accounts (AccountID, AccountType, UserID, InvestorID) 
	values (10021, 'Entrepreneur', 's.Gonzal', 01),
			(10022, 'Entrepreneur', 'flew12', 01),
            (10023, 'Entrepreneur', 'dew43', 01);


Alter table Lang
    Add Reading varchar(5) null, Speaking varchar(5) null, Writing varchar(5) null;
    

insert into Lang values (90004, 'Yoruba', '', '', '');
insert into Lang values (90005, 'Edo', '', '', '');
insert into Lang values (90006, 'French', '', '', '');
insert into Lang values (90007, 'Hausa', '', '', '');
insert into Lang values (90008, 'Arabic', '', '', '');

Create table PlanDoc(
	BizID int not null,
    BizGoals varchar(150) null,
    TurnOverFiveYears decimal(10,2),
    TurnOverFourYears decimal(10,2),
    TurnOverThreeYears decimal(10,2),
    TurnOverTwoyearss decimal(10,2),
    TurnOverLastYear decimal(10,2),
    Primary key (BizID),
    Foreign Key (BizID) references BusinessInfo(BizID)
);

create table User_Sector(
	UserID varchar(20) Not Null,
    SectorName varchar(50) Not Null,
    Foreign Key (SectorName) References Sector(SectorName),
    Foreign Key (UserID) References Users(UserID)
);

Insert into User_Sector(UserID, SectorName)
	Select UserID, SectorName from Sector;



Create table User_Email(
	UserID varchar(20) Not Null,
    EmailID int NOT NULL,
    BizID int NULL,
    Country varchar(50) Not Null,
    AccountID int null,
    Foreign Key (UserID) references Users(UserID),
    Foreign Key (EmailID) references Email(EmailID),
    Foreign key (BizID) references Businessinfo(BizID),
    Foreign Key (Country) references Country(Country),
    Foreign key (AccountID) references Accounts(AccountID)
);

Create table Business_Sector(
	SectorID int,
    BizID int NOT NULL,
    Foreign key (SectorID) references Sector(SectorID),
    Foreign Key (BizID) references businessinfo(BizID)
    );

Create table Sector_Investor(
	InvestorID int NULL,
    SectorID int,
    Foreign key (SectorID) references Sector(SectorID),
    Foreign Key (InvestorID) references Investor(InvestorID)
);

Create table Business_Investor(
	BizID int NOT NULL,
    InvestorID int NULL,
    Foreign Key (BizID) references businessinfo(BizID),
    Foreign Key (InvestorID) references Investor(InvestorID)
);

Create table Investor_Language(
	InvestorID int NULL,
    LangName varchar(100),
    Foreign Key (InvestorID) references Investor(InvestorID),
    Foreign Key (LangName) references Lang(LangName)
);

Create table User_Language(
	UserID varchar(20),
    LangName varchar(100),
    Foreign Key (UserID) references Users(UserID),
    Foreign Key (LangName) references Lang(LangName)
);

Create table Zip_Address(
	UserID varchar(20),
    ZipCode varchar(10),
    Foreign Key (UserID) references Users(UserID),
    Foreign Key (ZipCode) references Zip(ZipCode)
);