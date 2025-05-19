import java.util.Scanner;
public class KelulusanSiswa{
	public static void main (String [] a)
	{
		Scanner S = new Scanner(System.in);
		System.out.print ("Masukkan jumlah Siswa : ");
		int jmlPeserta = S.nextInt();
		S.nextLine();
		
		for (int i=1; i<=jmlPeserta; i++){
		//minta nama
		System.out.print ("Nama :");
		String nama = S.nextLine();
		
		//minta nilai matematika
		System.out.print ("Nilai Matematika :");
		double nilaiMtk = S.nextDouble();
		
		//minta nilai pkn
		System.out.print ("Nilai Pkn :");
		double nilaiPkn = S.nextDouble();
		
		//minta nilai pendidikan agama
		System.out.print ("Nilai Agama :");
		double nilaiAgm = S.nextDouble();

		//minta nilai seni
		System.out.print("Nilai Seni :");
		double nilaiSn = S.nextDouble();
		
		//minta nilai Infor
		System.out.print("Nilai Informatika :");
		double nilaiInf = S.nextDouble();
		
		//minta nilai Olga
		System.out.print("Nilai Olahraga :");
		double nilaiOlg = S.nextDouble();
		
		//minta nilai Daerah
		System.out.print("Nilai Daerah :");
		double nilaiDr = S.nextDouble();
		
		//minta nilai Sejarah
		System.out.print("Nilai Sejarah :");
		double nilaiSjr = S.nextDouble();
		
		//minta nilai Bhs.Indonesia
		System.out.print("Nilai Bhs.Indonesia :");
		double nilaiind = S.nextDouble();
		
		//minta nilai Bhs.Inggris
		System.out.print("Nilai Bhs.Inggris :");
		double nilaiIng = S.nextDouble();
		
		//minta nilai Ipas
		System.out.print("Nilai Ipas :");
		double nilaiIps = S.nextDouble();
		
		//minta nilai Daspro
		System.out.print("Nilai Keahlian :");
		double nilaiDspr = S.nextDouble();
		
		//hitung dan tampilkan rata-rata TKD
		double rerata = (nilaiPkn + nilaiAgm + nilaiMtk + nilaiSn + nilaiInf + nilaiOlg + nilaiDr + nilaiSjr + nilaiind + nilaiIng + nilaiIps + nilaiDspr)/12;
		System.out.println ("Rata-rata TKD = " + rerata);
		
		//hasil
	    if (rerata>=75 ){
			System.out.println ("ANDA LULUS");
		}
		else{
			System.out.println("ANDA TIDAK LULUS");
		}
	    S.nextLine();
		}
		
		
	  }
}