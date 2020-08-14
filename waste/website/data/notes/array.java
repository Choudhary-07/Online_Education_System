import java.util.Scanner;

 class Array
 {
   public  static void main(String ar[])
   {
    Scanner s= new Scanner(System.in);
	int n;
	System.out.print("Enter the no of elements u want to print: ");
	n = s.nextInt();
	 int[] a = new int[n];
	 System.out.println("******************************************");
	  for(int i=0;i<n;i++)
	  {
	 System.out.print("Enter the value at index "+i+" : ");
	   a[i]=s.nextInt();
	  }
	  System.out.println("******************************************");
	  for(int i=0;i<n;i++)
	  {
	 System.out.println(" Value at index "+i+" is: "+a[i]);
	   
	  }
   }
 }