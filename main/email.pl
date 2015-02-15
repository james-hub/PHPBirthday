
#!/usr/local/bin/perl

use strict;
use DBI;
use CGI;

use POSIX qw( strftime );
my $mmddyyyy = strftime("%m/%d/%Y", localtime);
my $mm = strftime("%m", localtime);
my $dd = strftime("%d", localtime);
my $yy = strftime("%Y", localtime);



 # Enter Database Info
 my $USERNAME = "USERNAME";
 my $PASSWORD = "PASSWORD";
 my $DATABASE = "DATABASE";
 


 
# connect to database
my $dbh = DBI->connect("dbi:mysql:$DATABASE:localhost:3306", "$USERNAME", "$PASSWORD");
 
my $settings1 = $dbh->prepare("select * From settings WHERE `ID` LIKE '0'");
$settings1->execute();
while (my ($Path, $To_Email, $From_Email, $Subject, $Monthly_Email, $Email_Reminders) = $settings1->fetchrow_array()) {
#print "$Path $To_Email";


#$settings1->execute();

# prepare the query
my $sth = $dbh->prepare("select * From phpbirthday WHERE `B_Date` LIKE '%-$mm-$dd%'");

# execute the query
$sth->execute();
 



my $i = 0;
while (my ($Name, $B_Date) = $sth->fetchrow_array()) {
$i = $i+1;
};
# print "The Number is: $i";
$sth->execute();




# print $i;

if (($Email_Reminders == 1) && ($i > 0))   {


my $title='mail test';

open(MAIL, "|/usr/lib/sendmail -t");

print MAIL "Content-type: text/plain\r\n"; 

## Mail Header
print MAIL "To: $To_Email\n";
print MAIL "From: $From_Email\n";
print MAIL "Subject: $Subject\n\n";

## Mail Body
print MAIL "Hello!,

This Is Your Automated Birthday Reminder.

The following people have their birthday TODAY:\n\n";






while(my ($Name, $Address, $City, $State, $Postal, $Country, $B_Date) = $sth->fetchrow_array()) {


my $age = $yy - $B_Date;


print MAIL "     $Name (Turns $age!)\n";

#print "This user has a Birthday TODAY: $Name \n";
};


}


print MAIL "\nThis is an automated message, please do not respond.

$Path";

close(MAIL);










################
# MONTHLYEMAIL #
################

# prepare the query
my $sthMonthly = $dbh->prepare("select * From phpbirthday WHERE `B_Date` LIKE '%-$mm-%'");

# execute the query
$sthMonthly->execute();


if (($Monthly_Email == 1) && ($dd == 1))   {
 
 
 
my $title='mail test';

open(MAIL, "|/usr/lib/sendmail -t");

print MAIL "Content-type: text/plain\r\n"; 

## Mail Header
print MAIL "To: $To_Email\n";
print MAIL "From: $From_Email\n";
print MAIL "Subject: $Subject\n\n";

## Mail Body
print MAIL "Hello!,

This Is Your Automated Birthday Reminder.

The following people have their birthday this MONTH:\n\n";



while(my ($Name, $Address, $City, $State, $Postal, $Country, $B_Date) = $sthMonthly->fetchrow_array()) {

my $age2 = $yy - $B_Date;

print MAIL "     $Name (Turns $age2!) $B_Date\n";

#print "This user has a birthday this MONTH: $Name \n";
};



print MAIL "\nThis is an automated message, please do not respond.

$Path";

close(MAIL);

 

};

};
