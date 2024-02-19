class Books{

String book_name;
String book_author;
int no_of_pages;

void getData(String name, String aname, int nom_of_pages){

book_name= name;
book_author= aname;
no_of_pages= nom_of_pages;
}

void getDisplay(){
	System.out.println("Book Name " +book_name);
	System.out.println("Book Author " +book_author);
	System.out.println("No of pages " +no_of_pages);
	
}

public static void main(String args[]){
	Books B1= new Books();
	 B1.getData("Jungle Book","zaidi",56);
	 B1.getDisplay();
}
}