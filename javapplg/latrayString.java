import java.util.Scanner;
public class LatrayString {
public static void main (String [] args){
		Scanner s = new Scanner (System.in);
		String [] words = new String[5];
		//mengisi array words
		for (int i =0 ; i <= words.length-1 ; i++){
			System.out.print("masukkah words ke-" + i + ":");
			words[i] = s.nextLine();
	}
		//menampilkan array words
		System.out.print("|");
		for (int i =0 ; i <= words.length-1 ; i++){
		    System.out.print(words[i] + "|");
	}
	//baris baru
	System.out.println();
	
	//pertanyaan
	
	System.out.println("X + Y");
	System.out.print("Mau yang index berapa untuk X ?");
	int x = s.nextInt();
	
	System.out.print("Mau yang index berapa untuk Y ?");
	int y = s.nextInt();
	
	System.out.println("X + Y = " + (words[x]+" "+words[y]));
}
}