
## Multiple FTP/SFTP Connection Dynamically Laravel 8
### Refer free sftp access -
* https://www.sftp.net/public-online-sftp-servers

Tools----
- Laravel 8
- MS SQL
### SSMS Setup

* Create Database
* Create Table
```
USE [YoureDB_Name]
GO

SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[your_table](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[host] [varchar](50) NULL,
	[username] [varchar](50) NULL,
	[password] [varchar](50) NULL,
	[port] [varchar](50) NULL,
	[created_at] [datetime] NULL,
	[created_by] [varchar](100) NULL
) ON [PRIMARY]
GO
```
- 
