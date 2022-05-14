Select AccountID, AccountType, Accounts.UserID, Address.Country from Accounts, Address where Address.Country in (
	Select Country from Address where UserID='dew43');

Select AccountID, AccountType, AC.UserID, CO.Country from Accounts as AC left join Address as CO 
	on AC.UserID=CO.UserID;