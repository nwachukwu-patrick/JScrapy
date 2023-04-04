package org.JScrapy;
public class Main {
    public static void main(String[] args) {

        String baseURL2 = "http://localhost";//the website you want to clone
        Scrapper scrapper2 = new Scrapper(baseURL2);
        scrapper2.test(baseURL2);
        String outputDir = "C:\\Users\\Patrick\\Desktop\\localhost"; //location where the files will be saved
//        scrapper2.loopThroughLink(,baseURL2);


    }
}