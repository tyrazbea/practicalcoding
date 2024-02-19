//combine method cube, sfera, cuboid
public class Flaxyvolume {
public static void main (String [] args)  
	
	{
	symbol();
		int sisi = 10 , cube;
		cube = jumlah(sisi);

		System.out.println("sisi kiub adalah: " +sisi);
		System.out.println("isipadu cube adalah :" +cube);
	
	symbol();
		int panjang=10, lebar=5, tinggi=4, cuboid;
		cuboid = jumlah2(panjang,lebar,tinggi);

		System.out.println("panjang kuboid adalah: " +panjang);
		System.out.println("lebar kuboid adalah : " +lebar);
		System.out.println("tinggi kuboid adalah: " +tinggi);
		System.out.println("Isipadu kuboid : " +cuboid);
	
	symbol();
		double radius = 8.0, nn = 3.142, sfera;
		sfera = jumlah3(radius,nn);

		System.out.println("radius bagi sfera: " +radius);
		System.out.println("isipadu bagi sfera: " +sfera);
	symbol();
	}
	
	static void symbol() {
	System.out.println("----------------------------------------");
	}
	
	//method declaration
	
	static int jumlah(int sisi) {
	int cube;
	cube = sisi * sisi * sisi;
	return cube;
	}
	
	static int jumlah2(int panjang, int lebar, int tinggi) {
	int cuboid;
	cuboid = panjang * lebar * tinggi;
	return cuboid;
	}
	
	static double jumlah3(double radius, double nn) {
	double sfera;
	sfera = nn * 2.0 * radius;
	return sfera;
	}

}