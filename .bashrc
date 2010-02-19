# ~/.bashrc: executed by bash(1) for non-login shells.
# see /usr/share/doc/bash/examples/startup-files (in the package bash-doc)
# for examples

# If not running interactively, don't do anything
[ -z "$PS1" ] && return

# don't put duplicate lines in the history. See bash(1) for more options
export HISTCONTROL=ignoredups

# check the window size after each command and, if necessary,
# update the values of LINES and COLUMNS.
shopt -s checkwinsize

# make less more friendly for non-text input files, see lesspipe(1)
[ -x /usr/bin/lesspipe ] && eval "$(lesspipe)"

# set variable identifying the chroot you work in (used in the prompt below)
if [ -z "$debian_chroot" -a -r /etc/debian_chroot ]; then
    debian_chroot=$(cat /etc/debian_chroot)
fi

# set a fancy prompt (non-color, unless we know we "want" color)
case "$TERM" in
xterm-color)
    PS1='${debian_chroot:+($debian_chroot)}\[\033[01;32m\]\u@\h\[\033[00m\]:\[\033[01;34m\]\w\[\033[00m\]\$ '
    ;;
*)
    PS1='${debian_chroot:+($debian_chroot)}\u@\h:\w\$ '
    ;;
esac

# Comment in the above and uncomment this below for a color prompt
#PS1='${debian_chroot:+($debian_chroot)}\[\033[01;32m\]\u@\h\[\033[00m\]:\[\033[01;34m\]\w\[\033[00m\]\$ '

# If this is an xterm set the title to user@host:dir
case "$TERM" in
xterm*|rxvt*)
    PROMPT_COMMAND='echo -ne "\033]0;${USER}@${HOSTNAME}: ${PWD/$HOME/~}\007"'
    ;;
*)
    ;;
esac

# Alias definitions.
# You may want to put all your additions into a separate file like
# ~/.bash_aliases, instead of adding them here directly.
# See /usr/share/doc/bash-doc/examples in the bash-doc package.

#if [ -f ~/.bash_aliases ]; then
#    . ~/.bash_aliases
#fi

# enable color support of ls and also add handy aliases
if [ "$TERM" != "dumb" ]; then
    eval "`dircolors -b`"
    alias ls='ls --color=auto'
    #alias dir='ls --color=auto --format=vertical'
    #alias vdir='ls --color=auto --format=long'
fi

# some more ls aliases
alias ll='ls -l'
alias la='ls -A'
alias l='ls -CF'
alias ..='cd ..'
alias ...='cd ../..'

# enable programmable completion features (you don't need to enable
# this, if it's already enabled in /etc/bash.bashrc and /etc/profile
# sources /etc/bash.bashrc).
if [ -f /etc/bash_completion ]; then
    . /etc/bash_completion
fi

#SNNS_GUI_BIN=/home/chris/downloads/SNNSv4.2/xgui/bin/i686-pc-linux-gnu/
#if [ "`echo $PATH|grep $SNNS_GUI_BIN`" = "" ] ; then
#	export PATH=$PATH:$SNNS_GUI_BIN
#fi
#SNNS_TOOLS_BIN=/home/chris/downloads/SNNSv4.2/tools/bin/i686-pc-linux-gnu/
#if [ "`echo $PATH|grep $SNNS_TOOLS_BIN`" = "" ] ; then
#	export PATH=$PATH:$SNNS_TOOLS_BIN
#fi

#NOUVEAU_BIN=/home/chris/downloads/nouveau_bin/bin/
#if [ "`echo $PATH|grep $NOUVEAU_BIN`" = "" ] ; then
#	export PATH=$NOUVEAU_BIN:$PATH
#fi
CCACHE_BIN=/usr/lib/ccache/
if [ "`echo $PATH|grep $CCACHE_BIN`" = "" ] ; then
	export PATH=/usr/lib/ccache/:$PATH
fi

export CLASSPATH=.:/usr/share/java/*

export MAIL=/var/mail/chris
export VISUAL=vim
#source /home/pdv/info4/minmax99/bin/mxenv.sh

export PKG_CONFIG_PATH=/home/chris/Downloads/nouveau_bin/lib/pkgconfig/
export LD_LIBRARY_PATH=/home/chris/Downloads/nouveau_bin/lib/

export GPG_TTY=‘tty‘

