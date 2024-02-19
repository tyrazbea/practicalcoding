class forloop3 {
	public static void main (String [] args) {
		
		
	for (int x = 1; x <= 7; x++)
		{
		for (int y = 1; y <= x; y++)
		{
			if (y >=x)
			{
			System.out.print("*");
			}
			else if (y<=x)
			{
				System.out.print(" ");
			}
			
			System.out.println();
		}
	}
}
}