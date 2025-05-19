import java.util.Scanner;
public class CovaAry {
 public static void main (String [] a){
	 
	 Scanner S = new Scanner(System.in);
	double[] nilai = {80,85,78};
	System.out.println(nilai [0]+","+nilai[1]+","+nilai[2]);
	System.out.println ("Masukkan Nilai 0 :");
	
	nilai [0] = S.nextdouble();
	
	System.out.println ("Masukkan Nilai 1 :");
	nilai [1] = S.nextdouble();
	
	System.out.println ("Masukkan Nilai 2 :");
	nilai [2] = S.nextdouble();
	
	System.out.println(nilai [0]+","+nilai[1]+","+nilai[2]);
 }
 
}