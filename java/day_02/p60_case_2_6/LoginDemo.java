package com.yangbo.day_02.p60_case_2_6;

import java.util.ArrayList;
import java.util.Scanner;

public class LoginDemo {
    static String[] names = new String[20];
    static String[] pwds = new String[20];
    public static void main(String[] args) {
        label:
        while (true) {
            names[0] = "admin";
            pwds[0] = "123456";
            print();
            Scanner scanner = new Scanner(System.in);
            System.out.println("请选择功能");
            String fun = scanner.nextLine();
            switch (fun) {
                case "1":
                    enter();
                    break;
                case "2":
                    login();
                    break;
                case "3":
                    check();
                    break;
                case "4":
                    break label;
                default:
                    System.out.println("请重新输入");
                    break;
            }
        }
    }
    static void print() {
        System.out.println("-----登陆注册系统-----");
        System.out.println("1.登录");
        System.out.println("2.注册");
        System.out.println("3.查看");
        System.out.println("4.退出");
        System.out.println("--------------------");
    }
    static void enter() {
        System.out.println("请输入用户名");
        Scanner scanner = new Scanner(System.in);
        String name = scanner.nextLine();
        System.out.println("请输入密码");
        Scanner pass = new Scanner(System.in);
        String password = pass.nextLine();
        for (int i = 1; i <= names.length; i ++) {
            if (name.equals(names[i]) && password.equals(pwds[0])) {
                System.out.println("欢迎您，管理员");
                return;
            } else if (name.equals(names[i]) && password.equals(pwds[i])) {
                System.out.println("欢迎您，" + names[i]);
                return;
            } else if (name.equals(names[i]) && !password.equals(pwds[i])) {
                System.out.println("密码错误");
                enter();
            } else {
                System.out.println("该账户未注册，请先注册");
                return;
            }
        }
    }
    static void login() {
        System.out.println("请输入用户名");
        Scanner scanner = new Scanner(System.in);
        String name = scanner.nextLine();
        System.out.println("请输入密码");
        Scanner pass = new Scanner(System.in);
        String password = pass.nextLine();
        for (int i = 1; i < names.length; i++) {
            if (name.equals(names[i])) {
                System.out.println("该用户名已注册");
                login();
            } else if (names[i] == null) {
                names[i] = name;
                pwds[i] = password;
                System.out.println("注册成功");
                return;
            }
        }
    }
    static void check() {
        for (int i = 1; i < names.length; i++) {
            if (names[i] != null) {
                System.out.println(names[i]);
            } else if (names[1] == null) {
                System.out.println("使用人数为0");
                return;
            }
        }
    }
}
