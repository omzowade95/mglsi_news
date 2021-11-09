package sample;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXPasswordField;
import com.jfoenix.controls.JFXTextField;
import dao.UserDao;
import dao.UserDaoImpl;
import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.stage.Stage;
import model.Role;
import model.RoleName;
import model.User;
import  tools.*;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Persistence;
import javax.persistence.Query;
import java.io.IOException;
import java.net.URL;
import java.util.List;
import java.util.ResourceBundle;



public class Main extends Application implements Initializable {


    @FXML
    private Label bienvenuelbl;

    @FXML
    private JFXButton validerbtn;

    @FXML
    private JFXTextField usertxt;

    @FXML
    private JFXPasswordField pwdtxt;

    private UserDao userDao ;




    @Override
    public void start(Stage primaryStage) {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("/pages/acceuil.fxml"));
            Scene scene = new Scene(root);
            //scene.getStylesheets().add(getClass().getResource("/application.css").toExternalForm());
            primaryStage.setScene(scene);
            primaryStage.show();
        } catch(Exception e) {
            e.printStackTrace();
        }

    }

    public static void main(String[] args) {


        launch(args);


    }

    @FXML
    private void connexion(ActionEvent event) throws IOException  {
        userDao = new UserDaoImpl();
        String username = usertxt.getText();
        String password = pwdtxt.getText();
        String	url= "/pages/ussers.fxml" ;


        Outils.load(event, url);

    }



    public void initialize(URL arg0, ResourceBundle arg1) {
        // TODO Auto-generated method stub

    }


}
