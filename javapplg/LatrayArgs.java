public class LatrayArgs{
	public static void main (String [] args){
		System.out.println("String : "+args[0]+" "+args[1]);
		int x = Integer.parseInt(args[0]);
		int y = Integer.parseInt(args[1]);
		System.out.println("Int x+y = "+(x+y));
		double p = Double.parseDouble(args[0]);
	    double q = Double.parseDouble(args[1]);
		System.out.println("int p/q = "+(p/q));
		
	}
}