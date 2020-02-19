
# 2) Сортировка:========================================================================================================
# list_of_chaos = [3,5,7,12,6,4,11,2,1,9,8,10,13]
#
# def my_sort(x):
#     list_of_sort = [x[0]]
#     for i in x[1:]:
#         if i > list_of_sort[len(list_of_sort) - 1]: # если i больше последнего эл. списка
#                     list_of_sort.append(i)          # добавляет i в конец этого списка
#         else:      # как бы условие если i < последнего эл. списка
#             for j in list_of_sort:
#                 if i < j:
#                     index_of_j = list_of_sort.index(j) # вычисляется индекс данного j
#                     list_of_sort.insert(index_of_j, i) # i ставиться в список на место j
#                     break     # перестаёт сравнивать дальше! важно!
#     return list_of_sort
#
# get_sort = my_sort(list_of_chaos)
# print(get_sort)


# 1) Ф. которая делает обратный словарь, но в котором изначальные значения к ключам заданны списками:===================
# slovarik_fr_ru = {
# #     'le pain': ['хлеб', 'каравай', 'лепешка'],
# #     'la femme': ['жена', 'женщина', 'супруга', 'баба'],
# #     'amour': ['любовь', 'страсть', 'симпатия'],
# # }
# #
# # def naoborot_for_hard_dict(x):
# #     hard_dict = {}
# #     all_lists_of_items = list(x.items())
# #
# # #    print(all_lists_of_items)
# # #     exit()
# #
# #     a = 0
# #     while a < len(all_lists_of_items):
# #         b = 0
# #         while b < len(all_lists_of_items[a][1]):
# #             key = all_lists_of_items[a][1][b]
# #             value = all_lists_of_items[a][0]
# #             hard_dict.update({key: value})
# #             b = b + 1
# #         a = a + 1
# #     return hard_dict
#
# slovarik_ru_fr = naoborot_for_hard_dict(slovarik_fr_ru)
# print(slovarik_ru_fr)