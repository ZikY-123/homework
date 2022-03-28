a = 1000                                  # 余额
b = int(input("请输入取款金额"))
c = a - b
if b > a:
    print("您的余额不足")
else:
    print("已取出" + str(b) + "元，余额" + str(c) + "元")
