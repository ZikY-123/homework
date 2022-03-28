def deal_with(number):
    data = list(set(number))
    data_len = len(data)
    data.sort(reverse=False)
    print(data_len)
    print(" ".join(str(i) for i in data))


if __name__ == '__main__':
    counter = int(input())  # 计数器
    number = list(map(int, input().split()))  # 输入的随机数
    deal_with(number)
