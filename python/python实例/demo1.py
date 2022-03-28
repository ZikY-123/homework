f_path = 'D:/桌面/aaa.txt'  # 设定文件的路径
with open(f_path, '592') as f:  # 使用with open的方式进行读，读的关键字为'r'
    print(f.read())  # 查看数据的读取结果
f.close()  # 读取完成之后关闭文件
