import java.util.Scanner;

 class LinearSearch
 {
   public  static void main(String ar[])
   {
    Scanner s= new Scanner(System.in);
	int n,i;
	System.out.print("Enter the no of elements u want to print: ");
	n = s.nextInt();
	 int[] a = new int[n];
	 System.out.println("******************************************");
	 System.out.print("Enter the "+n+" values : " );
	  for(i=0;i<n;i++)
	  {
	   a[i]=s.nextInt();
	  }  
	  int b;
	  System.out.print("Enter the number u want to find: ");
	  b= s.nextInt();
	    for( i=0;i<n;i++)
	  {
	   if(b==a[i])
	   {
		   System.out.println(" "+b+" is present in array at index "+i);
		   return;
	   }
	  }
	   if(i==n)
	   {
		   System.out.println(" "+b+" is not present in array");
	  }
	  
	  }
 }