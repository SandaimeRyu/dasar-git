import java.util.Scanner;
public class arrayku4 {
public static void main (String [] args){
		Scanner s = new Scanner (System.in);
		int [] Bil = new int[5];
		//mengisi array Bil
		for (int i =0 ; i <= Bil.length-1 ; i++){
			System.out.print("masukkah bil ke-" + i + ":");
			Bil [i] = s.nextInt();
	}
		//mengisi array Bil
		System.out.print("|");
		for (int i =0 ; i <= Bil.length;-1 ; i++){
		    System.out.print(Bil[i] + "|");
	}
	//baris baru
	System.out.println();
	//pertanyaan
	System.out.println("X"Y");
	System.out.print("Mau yang index berapa untuk X ?");
	int x = s.nextInt();
	
	System.out.print("Mau yang index berapa untuk Y ?");
	int y = s.nextInt();
	
System.out.println("x * Y =* + (Bil[x]*Bil[y]}};
}
}
}