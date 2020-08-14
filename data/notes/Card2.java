class PickCard
 {
	 public static void main(String ar[])
	 {
		 
   Card3 r = new Card();
    r.Setter(13);
    	int num = r.getter();
	int q= (int)(Math.random()*num);
	System.out.println("Random Number is: "+num);
 }
 }
class Card3
   {
	    int a;
         
     public void Setter(int n, char e)
     {
         
       this.a =n;
		  
		 
	 }
	 public int getter()
	 {
		 return this.a;
		 
	 }
   }
   
		 
       
      