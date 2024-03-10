[master]
ec2-3-84-86-51.compute-1.amazonaws.com

[worker]
ec2-54-210-194-26.compute-1.amazonaws.com

[cluster:children]
master
worker

[cluster:vars]
ansible_ssh_user=ubuntu
ansible_ssh_private_key_file=/home/ubuntu/lab_user.pem
ansible_ssh_common_args='-o StrictHostKeyChecking=no'
