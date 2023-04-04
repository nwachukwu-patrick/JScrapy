package org.JScrapy;

import org.jsoup.Connection;
import org.jsoup.Jsoup;
import org.jsoup.nodes.Document;

import java.io.IOException;
import java.util.Map;

public class Test {
    public static void main(String args[]){
        try {
            Connection.Response res = Jsoup.connect("https://home-trade.ltd/?a=login")
                    .data("username","","password","","mainform","mainform","a","do_login" +
                            "" +
                            "")
                    .method(Connection.Method.POST)
                    .execute();
            Map<String, String> loginCookies = res.cookies();
            Document doc = Jsoup.connect("https://home-trade.ltd/?a=account")
                            .cookies(loginCookies)
                                    .get();
            System.out.println(doc.outerHtml());
        } catch (IOException e) {
            throw new RuntimeException(e);
        }
    }

}
