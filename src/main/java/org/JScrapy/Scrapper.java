package org.JScrapy;

//import com.gargoylesoftware.htmlunit.html.HtmlAnchor;
import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;
import org.jsoup.select.Elements;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.nio.file.Path;
import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;
import java.util.concurrent.atomic.AtomicReference;

public class Scrapper {
    @SuppressWarnings("unchecked")
    Document html = null;
    String url;
    public void Scrapper(){}
    public Scrapper(String url) {
        this.url = url;
        try{

            this.html = Jsoup.connect(url).get();

        }catch (Exception ex){
    System.out.println(ex.getMessage());
        }
    }


    public String  getTitle(){
        return this.html.title();
    }
    public List <String> getTags(String tagName){
        LinkedList <String> tags = new LinkedList<>();
        tags.add(this.html.getElementsByTag(tagName).toString());
        return tags;

    }
    public List<List> getAttr(String TagName, String attr){
        Elements attri = new Elements();
        LinkedList <List> attrValue = new LinkedList<>();
        attrValue.add(this.html.getElementsByTag(TagName).eachAttr(attr));
        return attrValue;
    }
    public List<List> getLinks(String link, String TagName, String attr){
        List <List> attrValue = new LinkedList<>();
        Document htmll;
        try{

            htmll = Jsoup.connect(link).get();
            Elements attri = new Elements();
            attrValue.add(htmll.getElementsByTag(TagName).eachAttr(attr));
        }catch (Exception ex){
            System.out.println(ex.getMessage());
        }

        return attrValue;
    }
    public List<String> getTagText(String tag){
        LinkedList <String> text = new LinkedList<>();
        this.html.getElementsByTag(tag).forEach(n ->text.add(n.text()));
        return  text;
    }


    public void test(String url){
        List <String> visitedLinks = new ArrayList<>();
        List <String> unVisitedLinks = new ArrayList<>();
        String  baseURL = url;
        AtomicReference<String> curURL = new AtomicReference<>(url);
        List<List> links = getLinks(curURL.get(),"a","href");
        links.forEach(x->{
            x.forEach(n->{
                String link = (String) n;
                Boolean found = false;
                if(link.startsWith("#") || link.startsWith("/")  ){
                    //The current page link

                }else if(link.startsWith("http")){
                    // External Links
                    if(link.endsWith(".png")||  link.endsWith(".pdf") || link.endsWith(".jpg")||  link.endsWith(".jpeg")){
                        //External Image File

                    }else if( link.endsWith(".pdf") ){
                        //External PDF File

                    }else if( link.endsWith(".mp4")){
                        //External PDF File

                    }
                } else if( link.contains("@")){
                    //email
//                        System.out.println(link);
                }else {
                    //form new link
                    String currentURL = url;
                    if(url.endsWith("/")){
                        currentURL = url + n;
                    }else{
                        currentURL = url + "/" + n;
                    }

                    if (url.contains(currentURL)) {

                    }else{
//                        System.out.println(currentURL);
                        //http://localhost/https://coinlib.io  http://localhost/mailto:support@bitrade.ltd

//                    check if Links already existed in our unvisited links
                        for(int i = 0; i < unVisitedLinks.size(); i++){
                            if(unVisitedLinks.get(i).equalsIgnoreCase(currentURL)){
                                found  = true;
                            }else{
                                found = false;
                            }
                            if(found == false)
                                unVisitedLinks.add(currentURL);
                        }

//                    test(currentURL);
                    }
                }
             });

        });
//        unVisitedLinks.forEach(n->{
////            System.out.println(n);
//            test(n);
//        });
        unVisitedLinks.forEach(n->{
            System.out.println(n);
//            test(n);
        });
    }


    public void loopThroughLink(String dirname,String url){
         String  baseURL = url;
        AtomicReference<String> curURL = new AtomicReference<>(url);
        List<List> links = getLinks(curURL.get(),"a","href");
        links.forEach(n-> {
            n.forEach(x->{
                String q = (String) x;

                if(q.startsWith("https://coinlib.") || q.startsWith("https://www.")|| q.startsWith("https://irishformations.live")
                        ||  q.endsWith(".png")||  q.endsWith(".pdf") || q.endsWith(".jpg")||  q.endsWith(".jpeg")||  q.endsWith("javascript:void(0)")){

                    System.out.println("LINK: " + q);
//                    try {
//                        String name  = q.replaceAll("[-,?,=,/,.,:]","");
//                        test(dirname,name,Jsoup.connect(q).get().outerHtml());
//                        System.out.println("saved...");
//
//                    } catch (IOException e) {
//                        throw new RuntimeException(e);
//                    }
                }else if(q.startsWith("http")){

                    System.out.println("LINK: " + q);
                    try {
                        String name  = q.replaceAll("[-,?,=,/,.,:]","");
                        saveFile(dirname,name,Jsoup.connect(q).get().outerHtml());
                        System.out.println("saved...");

                    } catch (IOException e) {
                        throw new RuntimeException(e);
                    }
                }else if( q.startsWith("/")) {
                    curURL.set(baseURL  + q);
                    String rURL = ""+curURL;
                    System.out.println("LINK: " + rURL);
                    try {
                            String name  = rURL.replaceAll("[-,?,=,/,.,:]","");
                        saveFile(dirname,name,Jsoup.connect(rURL).get().outerHtml());
                            System.out.println("saved...");

                    } catch (IOException e) {
                        throw new RuntimeException(e);
                    }
                }
                else{
                        curURL.set(baseURL + "/" + q);
                        String rURL = ""+ curURL;
                        System.out.println("LINK: " + rURL);

//                        loopThroughLink(rURL);
                    List<List> anchor = getLinks(rURL,"a","href");
                    try {
                            String [] r = rURL.split("=");
                            String name  = rURL.replaceAll("[-,?,=,/,.,:]","");
                        saveFile(dirname,name,Jsoup.connect(rURL).get().outerHtml());
                            System.out.println("saved...");



                    } catch (IOException e) {
                        throw new RuntimeException(e);
                    }
                    }
            });
        });

    }
    public static void print(Object x){
        System.out.println(x);
    }

    public void  saveFile(String dirname, String name,String content){

        File file = new File(dirname+"/"+name+".php");
        File f1 = new File(dirname);
        try{
            f1.mkdir();
        }catch (Exception e){
            System.out.println(e.getMessage());
        }

            try {
               if(file.createNewFile()){
                   try {
                       FileWriter writer = new FileWriter(file);
                       writer.write(content);
                       writer.flush();
                   } catch (IOException e) {
                       throw new RuntimeException(e);
                   }
               }
            } catch (IOException e) {
                throw new RuntimeException(e);
            }


    }


}
