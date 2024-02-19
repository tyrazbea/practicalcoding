class Inheritance2 extends Inheritance1
{
private double ip;
public void setip (double vip)
{
ip=vip;
}
public double getip()
{
return(ip);
}
public void display()
{
System.out.println("IP : "+getip());
System.out.println("Nama : "+getnama());
System.out.println("No ID : "+getnoID());
}
}