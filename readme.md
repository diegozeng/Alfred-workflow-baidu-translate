#Alfred workflow baidu translate  (v1.0)
----------------------------------

##Function
Detect the input language automatically and translate to different languages by baidu translate.


##Principle
Get the users' inputs -> POST them to baidu translate api -> Grasp  response results -> Arsing the result to xml format which can be recognized by Alfred.

##Direction for use
‘bt’ （keyword） ＋ space ＋ words/sentences (in different languages)


##Annotation
When the input language is non-Chinese, the aimed translate language will be set to chinese automatically.  
When the input language is Chinese, the aimed translate language will be set to English automatically. 


##Test Cases
1. English to Chinese
![image](EN－CH.png)
2. Chinese to English
![image](CH－EN.png)
3. Japanese to Chinese
![image](JP－CH.png)
 




