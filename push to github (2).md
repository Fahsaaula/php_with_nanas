1. Add the files in your new local repository. This stages them for the first commit.
```
git add .
```
2. Commit the files that you’ve staged in your local repository.
```
   git commit -m "initial commit"
```
3. Copy the https url of your newly created repo
4. In the Command prompt, add the URL for the remote repository where your local repository will be pushed.
```
coba dulu kalo udah remote repository gitnya belum
git remote -v
```
```
kalo belum ketik cli ini
git remote add origin remote repository URL
```
5. Push the changes in your local repository to GitHub.
```
git push -f origin master
```

That’s all