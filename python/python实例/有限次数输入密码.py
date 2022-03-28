# 从键盘录入密码，最多三次，超过三次无法再输入
oldPassWord = "12345678"
newPassWord = input("请输入密码")
a = 3
while not bool(newPassWord == oldPassWord):
    a -= 1
    print("密码错误，请再次输入，还有" + str(a) + "次机会")
    newPassWord = input("请输入密码")
    if 3 > a > 1:
        if newPassWord == oldPassWord:
            print("密码正确，欢迎您！")
            break
    else:
        print("密码错误次数过多，您的账户已被锁定！")
        break
