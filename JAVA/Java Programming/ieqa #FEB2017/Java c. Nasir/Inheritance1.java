class Inheritance1
{
private String noID;
private String nama;
public void setnoID (String noID)
{
noID=noID;
}
public void setnama (String vnama)
{
nama=vnama;
}
public String getnoID()
{
return (noID);
}
public String getnama()
{
return (nama);
}
public void display()
{
System.out.println("No ID"+getnoID());
System.out.println("Nama"+getnama());
}
}