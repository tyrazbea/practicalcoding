import java.awt.*;
import java.applet.*;
import java.awt.event.*;


public class KiraBMI extends Applet implements ActionListener {
        
        
   Label lbl1 = new Label ("Masukkan berat (kg) : ");
   TextField txt1 = new TextField(5);
   Label lbl2 = new Label ("Masukkan tinggi (cm) : ");
   TextField txt2 = new TextField(5);
   Button btn1 = new Button ("Kira");
   Label lbl3 = new Label (" ");
   
   public void init() {
       add(lbl1);
       add(txt1);
       add(lbl2);
       add(txt2);
       add(btn1);
       add(lbl3);
       
       btn1.addActionListener(this);
       }
        
   public void actionPerformed(ActionEvent a) 
       {
           if(a.getSource() == btn1) {
           double x = Integer.parseInt(txt1.getText());
           double y = Integer.parseInt(txt2.getText());
           double bmi = x / ((y/100)*(y/100));
           
           if (bmi<18.5) {
               lbl3.setText("Underweight");
           }
           
           if ((bmi>=18.5) && (bmi<=24.5)) {
               lbl3.setText("Normal");
           }
           
           if ((bmi>=25.0) && (bmi<=29.9)) {
               lbl3.setText("Overweight");      
           }
           
           if (bmi>=30.0) {
               lbl3.setText("Obese");      
           }
        }
    }
}

  