 class TwoCardsPick
 {
    public static void main(String ar[])
    {
		TwoCardsPick w=new TwoCardsPick();
		w.War();
	}
		public void War()
		{
	  Card4 c = new Card4();
	  c.setnum(13);
	int num= c.getnum();
	 String[] a= new String[]{"spade","heart","club","diamond"};
	 c.setstring(a);
	 String[] r =c.getstring();
	  int p = (int)(Math.random()* num+1);
	  int s = (int)(Math.random()* num+1);
	 if(p==1)
	 {
		System.out.print("Your Card is Ace"); 
	 }	
	 else if(p==11)
	 {
		System.out.print("Your Card is Jack"); 
	 }	
	 else if(p==12)
	 {
		System.out.print(" Your Card  is Queen"); 
	 }	
	 else if(p==13)
	 {
		System.out.print("Your Card is King"); 
	 }	
	 else
	 {
	 System.out.print( "Your Card is  "+p);
	 }
	  int t = (int)(Math.random()* 4);
	  for(int i=0;i<4;i++)
	  {
	  if(i==t)
	  {	  
	  System.out.println( "  of  "+r[i]);
	  }
	  }
	  int g = (int)(Math.random()* 4);
	  System.out.println( "***********************************");
	  if(s==1)
	 {
		System.out.print("Computer's Card is Ace"); 
	 }	
	 else if(s==11)
	 {
		System.out.print("Computer's Card is Jack"); 
	 }	
	 else if(s==12)
	 {
		System.out.print("Second Card is Queen"); 
	 }	
	 else if(s==13)
	 {
		System.out.print("Computer's Card is King"); 
	 }	
	 else
	 {
	 System.out.print( "Computer's Card is  "+s);
	 }
	  
	  for(int i=0;i<4;i++)
	  {
	  if(i==g)
	  {	  
	  System.out.print( "  of  "+r[i]);
	  }
	  }
	  if(p>s)
	  {
		  System.out,println("Your 
	  }
	}
		
 }