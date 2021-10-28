--TEST--
Bug #33957 (gmdate('W')/date('W') sometimes returns wrong week number)
--FILE--
<?php
date_default_timezone_set("UTC");

for ($i = 14; $i <= 31; $i++) {
	echo "1992-12-$i  ", date("W", strtotime("1992-12-$i")), "\n";
}
for ($i = 1; $i <= 8; $i++) {
	echo "1993-01-$i  ", date("W", strtotime("1993-01-$i")), "\n";
}
echo "----\n";
echo "             ";
foreach (range(1992, 2019) as $year) {
	echo "$year     ";
}
echo "\n";

for ($i = 14; $i <= 31; $i++) {
	echo "   (12-$i) ";
	foreach (range(1992, 2019) as $year) {
		echo sprintf(" %02d-", date("W", strtotime("$year-12-$i")));
		echo sprintf("%04d ", date("o", strtotime("$year-12-$i")));
	}
	echo "\n";
}
for ($i = 1; $i <= 18; $i++) {
	printf("+1 (01-%02d) ", $i);
	foreach (range(1993, 2020) as $year) {
		echo sprintf(" %02d-", date("W", strtotime("$year-1-$i")));
		echo sprintf("%04d ", date("o", strtotime("$year-1-$i")));
	}
	echo "\n";
}
echo "----\n";
?>
--EXPECT--
1992-12-14  51
1992-12-15  51
1992-12-16  51
1992-12-17  51
1992-12-18  51
1992-12-19  51
1992-12-20  51
1992-12-21  52
1992-12-22  52
1992-12-23  52
1992-12-24  52
1992-12-25  52
1992-12-26  52
1992-12-27  52
1992-12-28  53
1992-12-29  53
1992-12-30  53
1992-12-31  53
1993-01-1  53
1993-01-2  53
1993-01-3  53
1993-01-4  01
1993-01-5  01
1993-01-6  01
1993-01-7  01
1993-01-8  01
----
             1992     1993     1994     1995     1996     1997     1998     1999     2000     2001     2002     2003     2004     2005     2006     2007     2008     2009     2010     2011     2012     2013     2014     2015     2016     2017     2018     2019
   (12-14)  51-1992  50-1993  50-1994  50-1995  50-1996  50-1997  51-1998  50-1999  50-2000  50-2001  50-2002  50-2003  51-2004  50-2005  50-2006  50-2007  50-2008  51-2009  50-2010  50-2011  50-2012  50-2013  50-2014  51-2015  50-2016  50-2017  50-2018  50-2019
   (12-15)  51-1992  50-1993  50-1994  50-1995  50-1996  51-1997  51-1998  50-1999  50-2000  50-2001  50-2002  51-2003  51-2004  50-2005  50-2006  50-2007  51-2008  51-2009  50-2010  50-2011  50-2012  50-2013  51-2014  51-2015  50-2016  50-2017  50-2018  50-2019
   (12-16)  51-1992  50-1993  50-1994  50-1995  51-1996  51-1997  51-1998  50-1999  50-2000  50-2001  51-2002  51-2003  51-2004  50-2005  50-2006  50-2007  51-2008  51-2009  50-2010  50-2011  50-2012  51-2013  51-2014  51-2015  50-2016  50-2017  50-2018  51-2019
   (12-17)  51-1992  50-1993  50-1994  50-1995  51-1996  51-1997  51-1998  50-1999  50-2000  51-2001  51-2002  51-2003  51-2004  50-2005  50-2006  51-2007  51-2008  51-2009  50-2010  50-2011  51-2012  51-2013  51-2014  51-2015  50-2016  50-2017  51-2018  51-2019
   (12-18)  51-1992  50-1993  50-1994  51-1995  51-1996  51-1997  51-1998  50-1999  51-2000  51-2001  51-2002  51-2003  51-2004  50-2005  51-2006  51-2007  51-2008  51-2009  50-2010  50-2011  51-2012  51-2013  51-2014  51-2015  50-2016  51-2017  51-2018  51-2019
   (12-19)  51-1992  50-1993  51-1994  51-1995  51-1996  51-1997  51-1998  50-1999  51-2000  51-2001  51-2002  51-2003  51-2004  51-2005  51-2006  51-2007  51-2008  51-2009  50-2010  51-2011  51-2012  51-2013  51-2014  51-2015  51-2016  51-2017  51-2018  51-2019
   (12-20)  51-1992  51-1993  51-1994  51-1995  51-1996  51-1997  51-1998  51-1999  51-2000  51-2001  51-2002  51-2003  52-2004  51-2005  51-2006  51-2007  51-2008  51-2009  51-2010  51-2011  51-2012  51-2013  51-2014  51-2015  51-2016  51-2017  51-2018  51-2019
   (12-21)  52-1992  51-1993  51-1994  51-1995  51-1996  51-1997  52-1998  51-1999  51-2000  51-2001  51-2002  51-2003  52-2004  51-2005  51-2006  51-2007  51-2008  52-2009  51-2010  51-2011  51-2012  51-2013  51-2014  52-2015  51-2016  51-2017  51-2018  51-2019
   (12-22)  52-1992  51-1993  51-1994  51-1995  51-1996  52-1997  52-1998  51-1999  51-2000  51-2001  51-2002  52-2003  52-2004  51-2005  51-2006  51-2007  52-2008  52-2009  51-2010  51-2011  51-2012  51-2013  52-2014  52-2015  51-2016  51-2017  51-2018  51-2019
   (12-23)  52-1992  51-1993  51-1994  51-1995  52-1996  52-1997  52-1998  51-1999  51-2000  51-2001  52-2002  52-2003  52-2004  51-2005  51-2006  51-2007  52-2008  52-2009  51-2010  51-2011  51-2012  52-2013  52-2014  52-2015  51-2016  51-2017  51-2018  52-2019
   (12-24)  52-1992  51-1993  51-1994  51-1995  52-1996  52-1997  52-1998  51-1999  51-2000  52-2001  52-2002  52-2003  52-2004  51-2005  51-2006  52-2007  52-2008  52-2009  51-2010  51-2011  52-2012  52-2013  52-2014  52-2015  51-2016  51-2017  52-2018  52-2019
   (12-25)  52-1992  51-1993  51-1994  52-1995  52-1996  52-1997  52-1998  51-1999  52-2000  52-2001  52-2002  52-2003  52-2004  51-2005  52-2006  52-2007  52-2008  52-2009  51-2010  51-2011  52-2012  52-2013  52-2014  52-2015  51-2016  52-2017  52-2018  52-2019
   (12-26)  52-1992  51-1993  52-1994  52-1995  52-1996  52-1997  52-1998  51-1999  52-2000  52-2001  52-2002  52-2003  52-2004  52-2005  52-2006  52-2007  52-2008  52-2009  51-2010  52-2011  52-2012  52-2013  52-2014  52-2015  52-2016  52-2017  52-2018  52-2019
   (12-27)  52-1992  52-1993  52-1994  52-1995  52-1996  52-1997  52-1998  52-1999  52-2000  52-2001  52-2002  52-2003  53-2004  52-2005  52-2006  52-2007  52-2008  52-2009  52-2010  52-2011  52-2012  52-2013  52-2014  52-2015  52-2016  52-2017  52-2018  52-2019
   (12-28)  53-1992  52-1993  52-1994  52-1995  52-1996  52-1997  53-1998  52-1999  52-2000  52-2001  52-2002  52-2003  53-2004  52-2005  52-2006  52-2007  52-2008  53-2009  52-2010  52-2011  52-2012  52-2013  52-2014  53-2015  52-2016  52-2017  52-2018  52-2019
   (12-29)  53-1992  52-1993  52-1994  52-1995  52-1996  01-1998  53-1998  52-1999  52-2000  52-2001  52-2002  01-2004  53-2004  52-2005  52-2006  52-2007  01-2009  53-2009  52-2010  52-2011  52-2012  52-2013  01-2015  53-2015  52-2016  52-2017  52-2018  52-2019
   (12-30)  53-1992  52-1993  52-1994  52-1995  01-1997  01-1998  53-1998  52-1999  52-2000  52-2001  01-2003  01-2004  53-2004  52-2005  52-2006  52-2007  01-2009  53-2009  52-2010  52-2011  52-2012  01-2014  01-2015  53-2015  52-2016  52-2017  52-2018  01-2020
   (12-31)  53-1992  52-1993  52-1994  52-1995  01-1997  01-1998  53-1998  52-1999  52-2000  01-2002  01-2003  01-2004  53-2004  52-2005  52-2006  01-2008  01-2009  53-2009  52-2010  52-2011  01-2013  01-2014  01-2015  53-2015  52-2016  52-2017  01-2019  01-2020
+1 (01-01)  53-1992  52-1993  52-1994  01-1996  01-1997  01-1998  53-1998  52-1999  01-2001  01-2002  01-2003  01-2004  53-2004  52-2005  01-2007  01-2008  01-2009  53-2009  52-2010  52-2011  01-2013  01-2014  01-2015  53-2015  52-2016  01-2018  01-2019  01-2020
+1 (01-02)  53-1992  52-1993  01-1995  01-1996  01-1997  01-1998  53-1998  52-1999  01-2001  01-2002  01-2003  01-2004  53-2004  01-2006  01-2007  01-2008  01-2009  53-2009  52-2010  01-2012  01-2013  01-2014  01-2015  53-2015  01-2017  01-2018  01-2019  01-2020
+1 (01-03)  53-1992  01-1994  01-1995  01-1996  01-1997  01-1998  53-1998  01-2000  01-2001  01-2002  01-2003  01-2004  01-2005  01-2006  01-2007  01-2008  01-2009  53-2009  01-2011  01-2012  01-2013  01-2014  01-2015  53-2015  01-2017  01-2018  01-2019  01-2020
+1 (01-04)  01-1993  01-1994  01-1995  01-1996  01-1997  01-1998  01-1999  01-2000  01-2001  01-2002  01-2003  01-2004  01-2005  01-2006  01-2007  01-2008  01-2009  01-2010  01-2011  01-2012  01-2013  01-2014  01-2015  01-2016  01-2017  01-2018  01-2019  01-2020
+1 (01-05)  01-1993  01-1994  01-1995  01-1996  01-1997  02-1998  01-1999  01-2000  01-2001  01-2002  01-2003  02-2004  01-2005  01-2006  01-2007  01-2008  02-2009  01-2010  01-2011  01-2012  01-2013  01-2014  02-2015  01-2016  01-2017  01-2018  01-2019  01-2020
+1 (01-06)  01-1993  01-1994  01-1995  01-1996  02-1997  02-1998  01-1999  01-2000  01-2001  01-2002  02-2003  02-2004  01-2005  01-2006  01-2007  01-2008  02-2009  01-2010  01-2011  01-2012  01-2013  02-2014  02-2015  01-2016  01-2017  01-2018  01-2019  02-2020
+1 (01-07)  01-1993  01-1994  01-1995  01-1996  02-1997  02-1998  01-1999  01-2000  01-2001  02-2002  02-2003  02-2004  01-2005  01-2006  01-2007  02-2008  02-2009  01-2010  01-2011  01-2012  02-2013  02-2014  02-2015  01-2016  01-2017  01-2018  02-2019  02-2020
+1 (01-08)  01-1993  01-1994  01-1995  02-1996  02-1997  02-1998  01-1999  01-2000  02-2001  02-2002  02-2003  02-2004  01-2005  01-2006  02-2007  02-2008  02-2009  01-2010  01-2011  01-2012  02-2013  02-2014  02-2015  01-2016  01-2017  02-2018  02-2019  02-2020
+1 (01-09)  01-1993  01-1994  02-1995  02-1996  02-1997  02-1998  01-1999  01-2000  02-2001  02-2002  02-2003  02-2004  01-2005  02-2006  02-2007  02-2008  02-2009  01-2010  01-2011  02-2012  02-2013  02-2014  02-2015  01-2016  02-2017  02-2018  02-2019  02-2020
+1 (01-10)  01-1993  02-1994  02-1995  02-1996  02-1997  02-1998  01-1999  02-2000  02-2001  02-2002  02-2003  02-2004  02-2005  02-2006  02-2007  02-2008  02-2009  01-2010  02-2011  02-2012  02-2013  02-2014  02-2015  01-2016  02-2017  02-2018  02-2019  02-2020
+1 (01-11)  02-1993  02-1994  02-1995  02-1996  02-1997  02-1998  02-1999  02-2000  02-2001  02-2002  02-2003  02-2004  02-2005  02-2006  02-2007  02-2008  02-2009  02-2010  02-2011  02-2012  02-2013  02-2014  02-2015  02-2016  02-2017  02-2018  02-2019  02-2020
+1 (01-12)  02-1993  02-1994  02-1995  02-1996  02-1997  03-1998  02-1999  02-2000  02-2001  02-2002  02-2003  03-2004  02-2005  02-2006  02-2007  02-2008  03-2009  02-2010  02-2011  02-2012  02-2013  02-2014  03-2015  02-2016  02-2017  02-2018  02-2019  02-2020
+1 (01-13)  02-1993  02-1994  02-1995  02-1996  03-1997  03-1998  02-1999  02-2000  02-2001  02-2002  03-2003  03-2004  02-2005  02-2006  02-2007  02-2008  03-2009  02-2010  02-2011  02-2012  02-2013  03-2014  03-2015  02-2016  02-2017  02-2018  02-2019  03-2020
+1 (01-14)  02-1993  02-1994  02-1995  02-1996  03-1997  03-1998  02-1999  02-2000  02-2001  03-2002  03-2003  03-2004  02-2005  02-2006  02-2007  03-2008  03-2009  02-2010  02-2011  02-2012  03-2013  03-2014  03-2015  02-2016  02-2017  02-2018  03-2019  03-2020
+1 (01-15)  02-1993  02-1994  02-1995  03-1996  03-1997  03-1998  02-1999  02-2000  03-2001  03-2002  03-2003  03-2004  02-2005  02-2006  03-2007  03-2008  03-2009  02-2010  02-2011  02-2012  03-2013  03-2014  03-2015  02-2016  02-2017  03-2018  03-2019  03-2020
+1 (01-16)  02-1993  02-1994  03-1995  03-1996  03-1997  03-1998  02-1999  02-2000  03-2001  03-2002  03-2003  03-2004  02-2005  03-2006  03-2007  03-2008  03-2009  02-2010  02-2011  03-2012  03-2013  03-2014  03-2015  02-2016  03-2017  03-2018  03-2019  03-2020
+1 (01-17)  02-1993  03-1994  03-1995  03-1996  03-1997  03-1998  02-1999  03-2000  03-2001  03-2002  03-2003  03-2004  03-2005  03-2006  03-2007  03-2008  03-2009  02-2010  03-2011  03-2012  03-2013  03-2014  03-2015  02-2016  03-2017  03-2018  03-2019  03-2020
+1 (01-18)  03-1993  03-1994  03-1995  03-1996  03-1997  03-1998  03-1999  03-2000  03-2001  03-2002  03-2003  03-2004  03-2005  03-2006  03-2007  03-2008  03-2009  03-2010  03-2011  03-2012  03-2013  03-2014  03-2015  03-2016  03-2017  03-2018  03-2019  03-2020
----
