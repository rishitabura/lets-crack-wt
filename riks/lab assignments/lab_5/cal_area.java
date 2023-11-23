package lab_5;

class Shape{
    public double area(){
        return 0;
    }

}
class circle extends Shape {
    public double radius;

    public circle(double r)
    {
        this.radius = r;

    }

    public double area()
    {
        return (3.14*radius*radius);
    }
}

class rectangle extends  Shape{
    public double length;
    public double breadth;

    public  rectangle(double l , double b)
    {
        this.length = l;
        this.breadth = b;
    }
    public  double area()
    {
        return (length*breadth);
    }
}

public class cal_area {
    public static void main(String[] args) {

        circle s1 = new circle(2);
        System.out.println("Area of Circle - " + s1.area());

        rectangle s2 = new rectangle(4, 6);
        System.out.println("\nArea of Rectangle - " + s2.area());

    }

}
