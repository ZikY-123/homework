import jieba

list_1 = ''
phone = ''
address = ''
name = ''
for line in open("D:/桌面/test.txt", encoding="utf-8"):
    if len(line) == 1:
        pass
    else:
        seg_list = jieba.lcut(line)
        if seg_list[0] == '特色':
            for i in range(len(seg_list)):
                if seg_list[i] == '特色' or seg_list[i] == '专科' or seg_list[i] == '：':
                    pass
                else:
                    if not seg_list[i] == '\n':
                        list_1 += seg_list[i]
                    elif seg_list[i] == '\n':
                        list_1 = ''
        elif seg_list[0] == '电话':
            for i in range(len(seg_list)):
                if seg_list[i] == '电话' or seg_list[i] == '：':
                    pass
                else:
                    if not seg_list[i] == '\n':
                        phone += seg_list[i]
                    elif seg_list[i] == '\n':
                        phone = ''
        elif seg_list[0] == '地址':
            for i in range(len(seg_list)):
                if seg_list[i] == '地址' or seg_list[i] == '：':
                    pass
                else:
                    if not seg_list[i] == '\n':
                        address += seg_list[i]
                    elif seg_list[i] == '\n':
                        address = ''
        else:
            for i in range(len(seg_list)):
                if not seg_list[i] == '\n':
                    name += seg_list[i]
                elif seg_list[i] == '\n':
                    print(name)
                    name = ''
